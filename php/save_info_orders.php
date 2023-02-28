<?php
session_start();
require_once("dbconnect.php");
require_once("function_cart.php");
if (isset($_POST["btn_submit_save_order"])) {
    $sql_query_select_id = 'SELECT `ID_Buyer` FROM `buyers` WHERE `Email`="' . $_SESSION['email_order'] . '"';
    $result_query_select_id = mysqli_query($mysqli, $sql_query_select_id);
    $rows_query_select = mysqli_fetch_all($result_query_select_id, MYSQLI_ASSOC);
    if ($result_query_select_id->num_rows == 0) {
        $result_query_insert_buyers = $mysqli->query("INSERT INTO `buyers` (Name, Surname, Middle_Name, Email, Phone_Number) VALUES ('" . $_SESSION['Name'] . "', '" . $_SESSION['Surname'] . "', '" . $_SESSION['Middle_Name'] . "', '" . $_SESSION['Email'] . "', '" . $_SESSION['Phone_Number'] . "')");
        $ID_Buyer = $mysqli->insert_id;
    } else {
        $ID_Buyer = $rows_query_select[0]['ID_Buyer'];
    }
    $result_query_insert_orders = $mysqli->query("INSERT INTO `orders` (ID_Buyer) VALUES ('" . $ID_Buyer . "')");
    $ID_Order = $mysqli->insert_id;
    $result_query_insert_change_order_status = $mysqli->query("INSERT INTO `change_order_status` (ID_Order, ID_Status) VALUES ('" . $ID_Order . "', '2')");

    foreach ($products as $product) {
        $result_query_insert_kinds_orders = $mysqli->query("INSERT INTO `kinds_orders` (ID_Kind, ID_Order, Sum_Product) VALUES ('" . $product['ID_Kind'] . "', '" . $ID_Order . "', '" . $products_in_cart[$product['ID_Kind']] . "')");
    }
    $_SESSION['ID_Order'] = $ID_Order;
    unset($_SESSION["cart"]);
    unset($_SESSION["email_order"]);
    unset($_SESSION["ID_Addresse"]);
    unset($_SESSION["Surname"]);
    unset($_SESSION["Name"]);
    unset($_SESSION["Phone_Number"]);
    unset($_SESSION["Email"]);
    unset($_SESSION["Middle_Name"]);
    $mysqli->close();
    header("HTTP/1.1 301 Moved Permanently");
    if (isset($_SESSION["email"])) {
        header("Location: " . $address_site . "/personal_account_user.php");
    } else {
        header("Location: " . $address_site . "/confirm_order.php");
    }
} ?>
