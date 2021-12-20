<?php
//requires functions.php
//requires a duration to be set
if (!isset($duration)) {
    $duration = "daily"; //choosing to default to day
}
$results = get_top_10($duration);

switch ($duration) {
    case "daily":
        $title = "Top Scores Today";
        break;
    case "weekly":
        $title = "Top Scores This Week";
        break;
    case "monthly":
        $title = "Top Scores This Month";
        break;
    case "lifetimely":
        $title = "All Time Top Scores";
        break;
    default:
        $title = "Invalid Scoreboard";
        break;
}
?>
<div class="card bg-dark">
    <div class="card-body">
        <div class="card-title">
            <div class="fw-bold fs-3">
                <?php se($title); ?>
            </div>
        </div>
        <div class="card-text">
            <table class="table text-light">
                <thead>
                    <th>User</th>
                    <th>Score</th>
                    <th>Achieved</th>
                </thead>
                <tbody>
                    <?php if (!$results || count($results) == 0) : ?>
                        <tr>
                            <td colspan="100%">No scores available</td>
                        </tr>
                    <?php else : ?>
                        <?php foreach ($results as $result) : ?>
                            <tr>
                                <td>
                                    <!--<a href="profile.php?id=<?php se($result, 'user_id'); ?>"><?php se($result, "username"); ?></a>--> 
                                    <?php $user_id = se($result, "user_id", 0, false);
                                    $username = se($result, "username", "", false);
                                    include(__DIR__ . "/user_profile_link.php"); ?>


                                </td>
                                <td><?php se($result, "scoreState"); ?></td>
                                <td><?php se($result, "created"); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
