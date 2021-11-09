<?php
session_start();

require(__DIR__ . "/../../lib/functions.php");
reset_session();

flash("Successfully logged out", "success");

session_unset();
session_destroy();
header("Location: login.php");