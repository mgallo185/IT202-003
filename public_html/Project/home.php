<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<h1>Home</h1>

<form method= "POST" action = "home.php">

<input type = "submit" name="time" class = "navbar-nav me-auto mb-2 mb-lg-0" value= "daily" />
<input type = "submit" name="time" class = "navbar-nav me-auto mb-2 mb-lg-0" value= "weekly" />
<input type = "submit" name="time" class = "navbar-nav me-auto mb-2 mb-lg-0" value= "monthly" />
<input type = "submit" name="time" class = "navbar-nav me-auto mb-2 mb-lg-0" value= "lifetimely" />

</form> 

<?php

//if (is_logged_in(true)) {
    //echo "Welcome home, " . get_username();
    //comment this out if you don't want to see the session variables
    //echo "<pre>" . var_export($_SESSION, true) . "</pre>";
//
if(isset($_POST["time"])){
$duration = $_POST["time"];
} else{
    $duration = "daily";
}

?>
<?php require(__DIR__ . "/../../partials/score_table.php"); ?>

<?php
require(__DIR__ . "/../../partials/flash.php");
?>