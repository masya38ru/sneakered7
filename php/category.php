<?php
session_start();
require_once("dbconnect.php");
if (isset($_POST["btn_submit_add_category"]) && !empty($_POST["btn_submit_add_category"])) {

    if (isset($_POST["categoryProduct"])) {
        $categoryProduct = trim($_POST["categoryProduct"]);
        if (!empty($categoryProduct)) {
            $categoryProduct = htmlspecialchars($categoryProduct, ENT_QUOTES);
        }
    }
    $result_query_insert = $mysqli->query("INSERT INTO `category` (Name) VALUE ('" . $categoryProduct . "')");
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: " . $address_site . "/personal_account.php");
    $result_query_insert->close();
    $mysqli->close();
} else if (isset($_POST["btn_submit_update_category"]) && !empty($_POST["btn_submit_update_category"])) {

    if (isset($_POST["categoryProduct"])) {
        $categoryProduct = trim($_POST["categoryProduct"]);
        if (!empty($categoryProduct)) {
            $categoryProduct = htmlspecialchars($categoryProduct, ENT_QUOTES);
        }
    }

    if (isset($_POST["newCategoryProduct"])) {
        $newCategoryProduct = trim($_POST["newCategoryProduct"]);
        if (!empty($newCategoryProduct)) {
            $newCategoryProduct = htmlspecialchars($newCategoryProduct, ENT_QUOTES);
        }
    }
    $result_query_insert = $mysqli->query("UPDATE `category` SET Name='$newCategoryProduct' WHERE Name='$categoryProduct'");
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: " . $address_site . "/personal_account.php");
    $result_query_insert->close();
    $mysqli->close();
} else if (isset($_POST["btn_submit_drop_category"]) && !empty($_POST["btn_submit_drop_category"])) {
    if (isset($_POST["categoryProduct"])) {
        $categoryProduct = trim($_POST["categoryProduct"]);
        if (!empty($categoryProduct)) {
            $categoryProduct = htmlspecialchars($categoryProduct, ENT_QUOTES);
        }
    }
    $result_query_insert = $mysqli->query("DELETE FROM `category` WHERE Name='$categoryProduct'");

    header("HTTP/1.1 301 Moved Permanently");
    header("Location: " . $address_site . "/personal_account.php");
    $result_query_insert->close();
    $mysqli->close();
} else {
    exit("<p><strong>Ошибка!</strong> Вы зашли на эту страницу напрямую, поэтому нет данных для обработки. Вы можете перейти на <a href=" . $address_site . "> главную страницу </a>.</p>");
} ?>
