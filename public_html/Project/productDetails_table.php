<?php
//requires functions.php
//requires a duration to be set
//this page does not work and possibly not needed for shop project
if (!isset($duration)) {
    $duration = "day";
}
if (!isset($title)) {
    $title = "Top Scores";
}
if (!isset($scores)) {
    
    switch ($duration) {
        case "day":
            $title = "Top Scores Today";
            break;
        case "week":
            $title = "Top Scores This Week";
            break;
        case "month":
            $title = "Top Scores This Month";
            break;
        case "lifetime":
            $title = "All Time Top Scores";
            break;
        default:
            $title = "Invalid Scoreboard";
            break;
    }
} else {
    $results = $scores;
}
?>
<div class="card bg-light">
    <div class="card-body">
        <div class="card-title">
            <div class="fw-bold fs-3">
                <?php se($title); ?>
            </div>
        </div>
        <div class="card-text">
            <table class="table text-dark">
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
                                    <?php $user_id = se($result, "user_id", 0, false);
                                    $username = se($result, "username", "", false);
                                    include(__DIR__ . "/user_profile_link.php"); ?>
                                </td>
                                <td><?php se($result, "score"); ?></td>
                                <td><?php se($result, "created"); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>