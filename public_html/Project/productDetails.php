<?php
//sampling profs view_competitions for viewing product details
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
$db = getDB();
//handle join
if (isset($_POST["join"])) {
    $user_id = get_user_id();
    $comp_id = se($_POST, "comp_id", 0, false);
    $cost = se($_POST, "join_cost", 0, false);
}
$id = se($_GET, "id", -1, false);
if ($id < 1) {
    flash("Invalid competition", "danger");
    redirect("list_productDetails.php");
}
//handle page load
$stmt = $db->prepare("SELECT id, name, description, category, stock, unit_price, visibility from Products WHERE name like :name LIMIT 50");
$row = [];
$comp = "";
try {
    $stmt->execute([":uid" => get_user_id(), ":cid" => $id]);
    $r = $stmt->fetch();
    if ($r) {
        $row = $r;
        $comp = se($r, "Name", "N/A", false);
    }
} catch (PDOException $e) {
    flash("There was a problem fetching competitions, please try again later", "danger");
    error_log("List competitions error: " . var_export($e, true));
}
//$scores = get_top_scores_for_comp($id);
?>
<div class="container-fluid">
    <h1>View Product: <?php se($comp); ?></h1>
    <table class="table text-dark">
        <thead>
            <th>Name</th>
            <th>Description</th>
            <th>Category</th>
            <th>Stock</th>
            <th>Cost</th>
        </thead>
        <tbody>
            <?php if (count($row) > 0) : ?>
                <td><?php se($row, "name"); ?></td>
                <td><?php se($row, "description"); ?></td>
                <td><?php se($row, "category"); ?><br>Payout: <?php se($row, "place", "-"); ?></td>
                <td><?php se($row, "stock"); ?></td>
                <td><?php se($row, "unit_price", "-"); ?></td>
                <td>
                    <?php if (se($row, "joined", 0, false)) : ?>
                        <button class="btn btn-primary disabled" onclick="event.preventDefault()" disabled>Already Joined</button>
                    <?php else : ?>
                        <form method="POST">
                            <input type="hidden" name="comp_id" value="<?php se($row, 'id'); ?>" />
                            <input type="hidden" name="cost" value="<?php se($row, 'join_cost', 0); ?>" />
                            <input type="submit" name="join" class="btn btn-primary" value="Join (Cost: <?php se($row, "join_cost", 0) ?>)" />
                        </form>
                    <?php endif; ?>
                </td>
            <?php else : ?>
                <tr>
                    <td colspan="100%">No active competitins</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php
require(__DIR__ . "/../../partials/footer.php");
?>