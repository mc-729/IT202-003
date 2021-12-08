<?php
//remember, API endpoints should only echo/output precisely what you want returned
//any other unexpected characters can break the handling of the response
$response = ["message" => "There was a problem completing your purchase"];
http_response_code(400);
error_log("req: " . var_export($_POST, true));
if (isset($_POST["item_id"]) && isset($_POST["stock"]) && isset($_POST["unit_price"])) {
    require_once(__DIR__ . "/../../../lib/functions.php");
    session_start();
    $user_id = get_user_id();
    $balance = get_account_balance();
    $item_id = (int)se($_POST, "item_id", 0, false);
    $stock = (int)se($_POST, "stock", 0, false);
    $unit_price = (int)se($_POST, "unit_price", 0, false);
    $isValid = true;
    $errors = [];
    if ($user_id <= 0) {
        //invald user
        array_push($errors, "Invalid user");
        $isValid = false;
    }
    if ($balance <= 0 || $unit_price <= 0) {
        //not enough funds
        array_push($errors, "Invalid balance or unit_price");
        $isValid = false;
    }
    //I'll have predefined items loaded in at negative values
    //so I don't need/want this check
    /*if ($item_id <= 0) {
        //invalid item
        array_push($errors, "Invalid item");
        $isValid = false;
    }*/
    if ($stock <= 0) {
        //invalid quantity
        array_push($errors, "Invalid quantity");
        $isValid = false;
    }
    if (($unit_price*$stock) > $balance) {
        //can't afford
        array_push($errors, "Insufficient funds");
        $isValid = false;
    }
    if($isValid){
        //get true price from DB, don't trust the client
        $db = getDB();
        $stmt = $db->prepare("SELECT name, unit_price FROM Products where id = :id");
        $name = "";
        try {
            $stmt->execute([":id" => $item_id]);
            $r = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($r) {
                $unit_price = (int)se($r, "unit_price", 0, false);
                $name = se($r, "name", "", false);
            }
        } catch (PDOException $e) {
            error_log("Error getting cost of $item_id: " . var_export($e->errorInfo, true));
            $isValid = false;
        }
    }
    if ($isValid) {
        if (change_bills($unit_price * $stock, "purchase", get_user_account_id(), -1, "Purchased $stock $name")) {
            record_purchase($item_id, $user_id, $stock, $unit_price);
            add_item($item_id, $user_id, $stock);
            http_response_code(200);
            $response["message"] = "Purchased $stock of $name";
            //success
        } else {
            error_log("Problem creating transaction");
        }
    } else {
        $response["message"] = join("<br>", $errors);
    }
}
echo json_encode($response);