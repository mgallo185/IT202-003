
<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);


if (isset($_POST["title"])) {
    $starting_reward = (int)se($_POST, "starting_reward", 1, false);
    $cost = $starting_reward + 1;
    $title = se($_POST, "title", false, false);
    $join_fee =  (int)se($_POST, "join_fee", 0, false);
    $min_participants = (int)se($_POST, "min_participants", 3, false);
    $duration = (int)se($_POST, "duration", 1, false);
    $min_score = (int)se($_POST, "min_score", 0, false); 
    $first_place = (int)se($_POST, "first_place", 70, false);
    $second_place = (int)se($_POST, "second_place", 20, false);
    $third_place = (int)se($_POST, "third_place", 10, false);
    $balance = get_points(get_user_id());

    $isValid = true;
    //validate things
    if ($starting_reward<0) {
        flash("Invalid starting reward", "warning");
        $isValid = false;
    }
    if ($cost<1) {
        flash("Invalid cost", "danger");
        $isValid = false;
    }
    if ($starting_reward<0) {
        flash("Invalid starting reward", "warning");
    }
    if ($cost > $balance) {
        flash("need more points", "warning");
    }
    if ($min_participants < 3) {
        flash("You need to start a competition with a minimum participants of 3 to be able to pay out.", "warning");
        $isValid = false;
    }
    if ($min_score < 0) {
        flash("Your're minimum score to qualify must be no less than zero", "warning");
        $isValid = false;
    }
    if ($starting_reward<0) {
        flash("Invalid starting reward", "warning");
        $isValid = false;
    }
    if (!!$title === false) {
        flash("Name must be set", "warning");
        $isValid = false;
    }
    if ($join_fee < 0) {
        flash("Entry fee must be free (0) or more.", "warning");
        $isValid = false;
    }
    if ($duration < 3 || is_nan($duration)) {
        flash("Competition duration should be no less than 3 days.", "warning");
        $isValid = false;
    }
    if ($first_place + $second_place + $third_place != 100) {
        flash("Payouts must equal 100% total.", "warning");
        $isValid = false;
    }
    if ($first_place < $second_place || $first_place < $third_place || $second_place < $third_place) {
        flash("Payouts must be in increasing order from third to first.", "warning");
        $isValid = false;
    }
    // if everything valid including being able to afford
    if ($isValid) {
        //now create comp and deduct cost from user points
        $db = getDB();
        $query = "INSERT INTO Competitions (title, min_participants, current_participants, join_fee, starting_reward, current_reward, duration, creator_id, min_score, first_place_per, second_place_per, third_place_per, cost,  expires)
        values (:n, :mp,1,  :jf, :sr,:sr, :d, :cid, :ms, :fp, :sp, :tp, :c, DATE_ADD(NOW(), INTERVAL $duration day))";
        $stmt = $db->prepare($query);
        try {
            $stmt->execute([
                ":n" => $name,
                ":cid" => get_user_id(),
                ":sr" => $starting_reward,
                ":d" => $duration,
                ":ms" => $min_score,
                ":mp" => $min_participants,
                ":fp" => $first_place,
                ":sp" => $second_place,
                ":tp" => $third_place,
                ":jf" => $join_fee,
                ":c" => $cost

                
            ]);
            $comp_id = (int)$db->lastInsertId();
            if ($comp_id > 0) {
                change_points(get_user_id(), ($cost*-1), "Create-comp", false);
                error_log("Attempt to join created competiton: " . join_competition($comp_id, get_user_id(), true));
                flash("Successfully created competition $name", "success");
            }
        }
            catch (PDOException $e) {
                error_log("Error creating competition: " . var_export($e->errorInfo, true));
                flash("There was an error creating the competition: " . var_export($e->errorInfo[2]), "danger");
            }
        }

    }
?>
<div class="container-fluid">
    <h1>Create Competition</h1>
    <div>
        Points: <?php echo get_points(get_user_id()); ?>
    </div>
    <form method="POST">
        <div class="mb-3">
            <label for="n" class="form-label">Title</label>
            <input id="n" name="name" class="form-control" />
        </div>
        
        <div class="mb-3">
            <label for="jf" class="form-label">Join Fee</label>
            <input id="jf" name="join_fee" type="number" class="form-control" placeholder=">= 0" min="0" />
        </div>
        <div class="mb-3">
            <label for="fp" class="form-label">First Place Payout</label>
            <input id="fp" name="first_place" type="number" class="form-control" placeholder=">= 70" min="1" />
        </div>
        <div class="mb-3">
            <label for="sp" class="form-label">Second Place Payout</label>
            <input id="sp" name="second_place" type="number" class="form-control" placeholder=">= 20" min="1" />
        </div>
        <div class="mb-3">
            <label for="fp" class="form-label">Third Place Payout</label>
            <input id="tp" name="third_place" type="number" class="form-control" placeholder=">= 10" min="1" />
        </div>
        <div class="mb-3">
            <label for="ms" class="form-label">Min. Score</label>
            <input id="ms" name="min_score" type="number" class="form-control" placeholder=">= 1" min="1" />
        </div>
        <div class="mb-3">
            <label for="mp" class="form-label">Min. Participants</label>
            <input id="mp" name="min_participants" type="number" class="form-control" placeholder=">= 3" min="3" />
        </div>
        <div class="mb-3">
            <label for="sr" class="form-label">Starting Reward</label>
            <input id="sr" type="number" name="starting_reward" class="form-control" onchange="updateCost()" placeholder=">= 1" min="1" />
        </div>
        
        <div class="mb-3">
            <label for="d" class="form-label">Duration (in Days)</label>
            <input id="d" name="duration" type="number" class="form-control" placeholder=">= 3" min="3" />
        </div>
        <div class="mb-3">
            <input type="submit" value="Create Competition (Cost: 2)" class="btn btn-primary" />
        </div>
    </form>
    <script>
        function updateCost() {
            let starting = parseInt(document.getElementById("sr").value || 0) + 1;
            let join = parseInt(document.getElementById("jf").value || 0);
            if (join < 0) {
                join = 1;
            }
            let cost = starting;
            document.querySelector("[type=submit]").value = `Create Competition (Cost: ${cost})`;
        }
    </script>
</div>
<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>
