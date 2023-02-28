<?php
session_start();
require_once("dbconnect.php");
if (isset($_POST["btn_submit_add_product"]) && !empty($_POST["btn_submit_add_product"])) {

    if (isset($_POST["kindProduct"])) {
        $kindProduct = trim($_POST["kindProduct"]);
        if (!empty($kindProduct)) {
            $kindProduct = htmlspecialchars($kindProduct, ENT_QUOTES);
        }
    }

    if (isset($_POST["datetimeMake"])) {
        $datetimeMake = trim($_POST["datetimeMake"]);
        if (!empty($datetimeMake)) {
            $datetimeMake = htmlspecialchars($datetimeMake, ENT_QUOTES);
        }
    }

    $result = $mysqli->query("SELECT (ID_Kind) FROM `kinds` WHERE Name='$kindProduct'");
    $id_KindProduct = mysqli_fetch_array($result);

    $result_query_insert = $mysqli->query("INSERT INTO `products` (ID_Kind, Date_Make, ID_Status) VALUES ('" . $id_KindProduct['ID_Kind'] . "','" . $datetimeMake . "', '1')");

    header("HTTP/1.1 301 Moved Permanently");
    header("Location: " . $address_site . "/personal_account.php");
    $result->close();
    $result_query_insert->close();
    $mysqli->close();
    $id_KindProduct->close();
} else if (isset($_POST["btn_submit_drop_product"]) && !empty($_POST["btn_submit_drop_product"])) {

    if (isset($_POST["datetimeEnd"])) {
        $datetimeEnd = trim($_POST["datetimeEnd"]);
        if (!empty($datetimeEnd)) {
            $datetimeEnd = htmlspecialchars($datetimeEnd, ENT_QUOTES);
        }
    }

    $result_query_insert = $mysqli->query("UPDATE `products` SET ID_Status='3' WHERE DATE_ADD(Date_Make, INTERVAL 7 DAY)<'$datetimeEnd'");

    header("HTTP/1.1 301 Moved Permanently");
    header("Location: " . $address_site . "/personal_account.php");
    $result->close();
    $result_query_insert->close();
    $mysqli->close();
    $id_KindProduct->close();

} else {
    exit("<p><strong>Ошибка!</strong> Вы зашли на эту страницу напрямую, поэтому нет данных для обработки. Вы можете перейти на <a href=" . $address_site . "> главную страницу </a>.</p>");
}
?>
