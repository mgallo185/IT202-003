<?php
//remember, API endpoints should only echo/output precisely what you want returned
//any other unexpected characters can break the handling of the response
$response = ["message" => "There was a problem saving your score"];
http_response_code(400);
$contentType = $_SERVER["CONTENT_TYPE"];
error_log("Content Type $contentType");

if ($contentType === "application/json") {
    $json = file_get_contents('php://input');
    $data = json_decode($json, true)["data"];
} else if ($contentType === "application/x-www-form-urlencoded") {
    $data = $_POST;
    $response =["message" => "Test 1"];
}

error_log(var_export($data, true));

$response =["message" => "Testing "];
    session_start();
    $reject = false;
    require_once(__DIR__ . "/../../../lib/functions.php");
    $user_id = get_user_id();
    if ($user_id <= 0) {
        $reject = true;
        error_log("User not logged in");
        http_response_code(403);
        $response["message"] = "You must be logged in to save your score";
        flash($response["message"], "warning");
    }
    if (!$reject) {
        $response["message"] = "this is a test";
        $user_id = get_user_id();
        $score = (int)se($data, "score", 0, false);
        save_score($score, $user_id, true);
        $response["message"] = "score Saved";
        error_log("score successful!");
        http_response_code(200);
    }
echo json_encode($response);