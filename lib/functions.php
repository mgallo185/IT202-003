<?php
require_once(__DIR__ . "/db.php");
$BASE_PATH = '/Project/'; //This is going to be a helper for redirecting to our base project path since it's nested in another folder
function se($v, $k = null, $default = "", $isEcho = true)
{
    if (is_array($v) && isset($k) && isset($v[$k])) {
        $returnValue = $v[$k];
    } else if (is_object($v) && isset($k) && isset($v->$k)) {
        $returnValue = $v->$k;
    } else {
        $returnValue = $v;
        //added 07-05-2021 to fix case where $k of $v isn't set
        //this is to kep htmlspecialchars happy
        if (is_array($returnValue) || is_object($returnValue)) {
            $returnValue = $default;
        }
    }
    if (!isset($returnValue)) {
        $returnValue = $default;
    }
    if ($isEcho) {
        //https://www.php.net/manual/en/function.htmlspecialchars.php
        echo htmlspecialchars($returnValue, ENT_QUOTES);
    } else {
        //https://www.php.net/manual/en/function.htmlspecialchars.php
        return htmlspecialchars($returnValue, ENT_QUOTES);
    }
}
//TODO 2: filter helpers
function sanitize_email($email = "")
{
    return filter_var(trim($email), FILTER_SANITIZE_EMAIL);
}
function is_valid_email($email = "")
{
    return filter_var(trim($email), FILTER_VALIDATE_EMAIL);
}
//TODO 3: User Helpers
function is_logged_in($redirect = false, $destination = "login.php")
{
    $isLoggedIn = isset($_SESSION["user"]);
    if ($redirect && !$isLoggedIn) {
        flash("You must be logged in to view this page", "warning");
        die(header("Location: $destination"));
    }
    return $isLoggedIn; //se($_SESSION, "user", false, false);
}
function has_role($role)
{
    if (is_logged_in() && isset($_SESSION["user"]["roles"])) {
        foreach ($_SESSION["user"]["roles"] as $r) {
            if ($r["name"] === $role) {
                return true;
            }
        }
    }
    return false;
}
function get_username()
{
    if (is_logged_in()) { //we need to check for login first because "user" key may not exist
        return se($_SESSION["user"], "username", "", false);
    }
    return "";
}
function get_user_email()
{
    if (is_logged_in()) { //we need to check for login first because "user" key may not exist
        return se($_SESSION["user"], "email", "", false);
    }
    return "";
}
function get_user_id()
{
    if (is_logged_in()) { //we need to check for login first because "user" key may not exist
        return se($_SESSION["user"], "id", false, false);
    }
    return false;
}
//TODO 4: Flash Message Helpers
function flash($msg = "", $color = "info")
{
    $message = ["text" => $msg, "color" => $color];
    if (isset($_SESSION['flash'])) {
        array_push($_SESSION['flash'], $message);
    } else {
        $_SESSION['flash'] = array();
        array_push($_SESSION['flash'], $message);
    }
}

function getMessages()
{
    if (isset($_SESSION['flash'])) {
        $flashes = $_SESSION['flash'];
        $_SESSION['flash'] = array();
        return $flashes;
    }
    return array();
}
//TODO generic helpers
function reset_session()
{
    session_unset();
    session_destroy();
}
function users_check_duplicate($errorInfo)
{
    if ($errorInfo[1] === 1062) {
        //https://www.php.net/manual/en/function.preg-match.php
        preg_match("/Users.(\w+)/", $errorInfo[2], $matches);
        if (isset($matches[1])) {
            flash("The chosen " . $matches[1] . " is not available.", "warning");
        } else {
            //TODO come up with a nice error message
            flash("<pre>" . var_export($errorInfo, true) . "</pre>");
        }
    } else {
        //TODO come up with a nice error message
        flash("<pre>" . var_export($errorInfo, true) . "</pre>");
    }
}
function get_url($dest)
{
    global $BASE_PATH;
    if (str_starts_with($dest, "/")) {
        //handle absolute path
        return $dest;
    }
    //handle relative path
    return $BASE_PATH . $dest;
}
//snippet from my functions.php
function save_score($score, $user_id, $showFlash = false)
{
    if ($user_id < 1) {
        flash("Error saving score, you may not be logged in", "warning");
        return;
    }
    if ($score <= 0) {
        flash("Scores of zero are not recorded", "warning");
        return;
    }
    $db = getDB();
    $stmt = $db->prepare("INSERT INTO GamerScores (scoreState, user_id) VALUES (:score, :uid)");
    try {
        $stmt->execute([":score" => $score, ":uid" => $user_id]);
        if ($showFlash) {
            flash("Saved score of $score", "success");
        }
    } catch (PDOException $e) {
        flash("Error saving score: " . var_export($e->errorInfo, true), "danger");
    }
}

function get_top_10($duration = "day")
{
    $d = "day";
    if (in_array($duration, ["day", "week", "month", "lifetime"])) {
        //variable is safe
        $d = $duration;
    }
    $db = getDB();
    $query = "SELECT user_id,username, scoreState, GamerScores.created from GamerScores join Users on GamerScores.user_id = Users.id";
    if ($d !== "lifetime") {
        //be very careful passing in a variable directly to SQL, I ensure it's a specific value from the in_array() above
        $query .= " WHERE GamerScores.created >= DATE_SUB(NOW(), INTERVAL 1 $d)";
    }
    //remember to prefix any ambiguous columns (Users and Scores both have created)
    $query .= " ORDER BY scoreState Desc, GamerScores.created desc LIMIT 10"; //newest of the same score is ranked higher
    error_log($query);
    $stmt = $db->prepare($query);
    $results = [];
    try {
        $stmt->execute();
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($r) {
            $results = $r;
        }
    } catch (PDOException $e) {
        error_log("Error fetching scores for $d: " . var_export($e->errorInfo, true));
    }
    return $results;
}

function get_best_score($user_id)
{
    $query = "SELECT scoreState from GamerScores WHERE user_id = :id ORDER BY scoreState desc LIMIT 1";
    $db = getDB();
    $stmt = $db->prepare($query);
    try {
        $stmt->execute([":id" => $user_id]);
        $r = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($r) {
            return (int)se($r, "scoreState", 0, false);
        }
    } catch (PDOException $e) {
        error_log("Error fetching best score for user $user_id: " . var_export($e->errorInfo, true));
    }
    return 0;
}

function get_user_points()
{
    if (is_logged_in() && isset($_SESSION["user"])) {
        return (int)se($_SESSION["user"], "points", 0, false);
    }
    return 0;
}

function get_latest_scores($user_id, $limit = 10)
{
    if ($limit < 1 || $limit > 50) {
        $limit = 10;
    }
    $query = "SELECT scoreState, created from GamerScores where user_id = :id ORDER BY created desc LIMIT :limit";
    $db = getDB();
    //IMPORTANT: this is required for the execute to set the limit variables properly
    //otherwise it'll convert the values to a string and the query will fail since LIMIT expects only numerical values and doesn't cast
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    //END IMPORTANT

    $stmt = $db->prepare($query);
    try {
        $stmt->execute([":id" => $user_id, ":limit" => $limit]);
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($r) {
            return $r;
        }
    } catch (PDOException $e) {
        error_log("Error getting latest $limit scores for user $user_id: " . var_export($e->errorInfo, true));
    }
    return [];
}


function change_points($points, $reason)
{
    //I'm choosing to ignore the record of 0 point transactions
    if ($points > 0) {
        $query = "INSERT INTO PointsHistory (points, reason) 
            VALUES (:pc, :r), 
            (:pc2, :r)";
        //I'll insert both records at once, note the placeholders kept the same and the ones changed.
         $params[":r"] = $reason;
        $params[":pc"] = ($points * -1);

        $params[":pc2"] = $points;
        $db = getDB();
        $stmt = $db->prepare($query);
        error_log("Transfering");
        try {
            $stmt->execute($params);
            error_log("transaction complete");
            return true;
        } catch (PDOException $e) {
            error_log(var_export($e->errorInfo, true));
            flash("Transfer error occurred: " . var_export($e->errorInfo, true), "danger");
        }
        return false;
    }
}





function update_participants($comp_id)
{
    $db = getDB();
    $stmt = $db->prepare("UPDATE Competitions set current_participants = (SELECT IFNULL(COUNT(1),0) FROM CompetitionParticipants WHERE comp_id = :cid), 
    current_reward = IF(join_fee > 0, current_reward + CEILING(join_fee * 0.5), current_reward) WHERE id = :cid");
    try {
        $stmt->execute([":cid" => $comp_id]);
        return true;
    } catch (PDOException $e) {
        error_log("Update competition participant error: " . var_export($e, true));
    }
    return false;
}


function join_competition($comp_id, $user_id, $cost)
{
    $balance = get_user_points();
    if ($comp_id > 0) {
        if ($balance >= $cost) {
            $db = getDB();
            $stmt = $db->prepare("SELECT title, join_fee from Competitions where id = :id");

            try {
                $stmt->execute([":id" => $comp_id]);
                $r = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($r) {
                    $cost = (int)se($r, "join_fee", 0, false);
                    $name = se($r, "title", "", false);
                    if ($balance >= $cost) {
                        if (change_points($cost, "join-comp", get_user_id(), -1, "Joining competition $name")) {
                            if (add_to_competition($comp_id, $user_id)) {
                                flash("Successfully joined $name", "success");
                            }
                        } else {
                            flash("Failed to pay for competition", "danger");
                        }
                    } else {
                        flash("You can't afford to join this competition", "warning");
                    }
                }
            } catch (PDOException $e) {
                error_log("Comp lookup error " . var_export($e, true));
                flash("There was an error looking up the competition", "danger");
            }
        } else {
            flash("You can't afford to join this competition", "warning");
        }
    } else {
        flash("Invalid competition, please try again", "danger");
    }
}

function add_to_competition($comp_id, $user_id)
{
    $db = getDB();
    $stmt = $db->prepare("INSERT INTO CompetitionParticipants (user_id, comp_id) VALUES (:uid, :cid)");
    try {
        $stmt->execute([":uid" => $user_id, ":cid" => $comp_id]);
        update_participants($comp_id);
        return true;
    } catch (PDOException $e) {
        error_log("Join Competition error: " . var_export($e, true));
    }
    return false;
}

function persistQueryString($page)
{
    $_GET["page"] = $page;
    return http_build_query($_GET);
}



function redirect($path)
{ //header headache
    //https://www.php.net/manual/en/function.headers-sent.php#90160
    /*headers are sent at the end of script execution otherwise they are sent when the buffer reaches it's limit and emptied */
    if (!headers_sent()) {
        //php redirect
        die(header("Location: " . get_url($path)));
    }
    //javascript redirect
    echo "<script>window.location.href='" . get_url($path) . "';</script>";
    //metadata redirect (runs if javascript is disabled)
    echo "<noscript><meta http-equiv=\"refresh\" content=\"0;url=" . get_url($path) . "\"/></noscript>";
    die();
}

?>
