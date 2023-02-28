<?php
session_start();
require_once("dbconnect.php");
if (isset($_POST["btn_submit_more_info"]) && !empty($_POST["btn_submit_more_info"])) {

    if (isset($_POST["idOrder"])) {
        $idOrder = trim($_POST["idOrder"]);
        if (!empty($idOrder)) {
            $idOrder = htmlspecialchars($idOrder, ENT_QUOTES);
        } else {
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: " . $address_site . "/personal_account.php");
        }
    } else {
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: " . $address_site . "/personal_account.php");
    }

    $_SESSION['ID_Order'] = $idOrder;

    header("HTTP/1.1 301 Moved Permanently");
    header("Location: " . $address_site . "/more_info_order.php");
}

if (isset($_POST["btn_submit_update_status"]) && !empty($_POST["btn_submit_update_status"])) {

    if (isset($_POST["idOrder"])) {
        $idOrder = trim($_POST["idOrder"]);
        if (!empty($idOrder)) {
            $idOrder = htmlspecialchars($idOrder, ENT_QUOTES);
        }
    }

    if (isset($_POST["idStatus"])) {
        $idStatus = trim($_POST["idStatus"]);
        if (!empty($idStatus)) {
            $idStatus = htmlspecialchars($idStatus, ENT_QUOTES);
        }
    }

    $result_query_insert = $mysqli->query("INSERT INTO `change_order_status` (ID_Order, ID_Status) VALUE ('" . $idOrder . "', '" . $idStatus . "')");

    header("HTTP/1.1 301 Moved Permanently");
    header("Location: " . $address_site . "/personal_account.php");
    $result_query_insert->close();
    $mysqli->close();
} else {
    exit("<p><strong>Ошибка!</strong> Вы зашли на эту страницу напрямую, поэтому нет данных для обработки. Вы можете перейти на <a href=" . $address_site . "> главную страницу </a>.</p>");
}
?>
