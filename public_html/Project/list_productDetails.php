<?php
//this is sampling profs list_competitions for help
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
$db = getDB();
//handle join
if (isset($_POST["join"])) {
    $user_id = get_user_id();
    $comp_id = se($_POST, "comp_id", 0, false);
    $cost = se($_POST, "join_cost", 0, false);
    $balance = get_account_balance();
}
$per_page = 5;
paginate("SELECT count(1) as total FROM Products");
//handle page load
//TODO fix join
$stmt = $db->prepare("SELECT id, name, description, category, stock, unit_price, visibility from Products WHERE name like :name LIMIT 50");

$results = [];
try {
    $stmt->execute([":uid" => get_user_id()]);
    $r = $stmt->fetchAll();
    if ($r) {
        $results = $r;
    }
} catch (PDOException $e) {
    flash("There was a problem fetching the product details, please try again later", "danger");
    error_log("List Product Details error: " . var_export($e, true));
}
?>
<div class="container-fluid">
    <h1>List Product Details</h1>
    <table class="table text-dark">
        <thead>
            <th>Name</th>
            <th>Description</th>
            <th>Category</th>
            <th>Price</th>
            <th>Stock</th>
        </thead>
        <tbody>
            <?php if (count($results) > 0) : ?>
                <?php foreach ($results as $row) : ?>
                    <tr>
                        <td><?php se($row, "Name"); ?></td>
                        <td><?php se($row, "Description"); ?>
                        <td><?php se($row, "Category"); ?>
                        <td><?php se($row, "Price"); ?></td>
                        <td><?php se($row, "Stock", "-"); ?></td>
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
                            <a class="btn btn-secondary" href="productDetails.php?id=<?php se($row, 'id'); ?>">View</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="100%">No products or details listed</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <?php include(__DIR__ . "/../../partials/pagination.php"); ?>
</div>
<?php
require(__DIR__ . "/../../partials/footer.php");
?>