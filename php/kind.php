<?php
session_start();
require_once("dbconnect.php");
if (isset($_POST["btn_submit_add_kind"]) && !empty($_POST["btn_submit_add_kind"])) {

    if (isset($_POST["imgProduct"])) {
        $imgProduct = $_POST["imgProduct"];
    }

    if (isset($_POST["kindProduct"])) {
        $kindProduct = trim($_POST["kindProduct"]);
        if (!empty($kindProduct)) {
            $kindProduct = htmlspecialchars($kindProduct, ENT_QUOTES);
        }
    }

    if (isset($_POST["categoryNumber"])) {
        $categoryNumber = trim($_POST["categoryNumber"]);
        if (!empty($categoryNumber)) {
            $categoryNumber = htmlspecialchars($categoryNumber, ENT_QUOTES);
        }
    }

    if (isset($_POST["purchasePrice"])) {
        $purchasePrice = trim($_POST["purchasePrice"]);
        if (!empty($purchasePrice)) {
            $purchasePrice = htmlspecialchars($purchasePrice, ENT_QUOTES);
        }
    }

    if (isset($_POST["tradePrice"])) {
        $tradePrice = trim($_POST["tradePrice"]);
        if (!empty($tradePrice)) {
            $tradePrice = htmlspecialchars($tradePrice, ENT_QUOTES);
        }
    }

    if (isset($_POST["sumStorage"])) {
        $sumStorage = trim($_POST["sumStorage"]);
        if (!empty($sumStorage)) {
            $sumStorage = htmlspecialchars($sumStorage, ENT_QUOTES);
        }
    }

    if (isset($_POST["productWeight"])) {
        $productWeight = trim($_POST["productWeight"]);
        if (!empty($productWeight)) {
            $productWeight = htmlspecialchars($productWeight, ENT_QUOTES);
        }
    }

    $result_query_insert = $mysqli->query("INSERT INTO `kinds` (Name, ID_Category, Purchase_Price, Trade_Price, Sum_Storage, Product_Weight, Product_Img) VALUES ('" . $kindProduct . "','" . $categoryNumber . "','" . $purchasePrice . "','" . $tradePrice . "','" . $sumStorage . "','" . $productWeight . "','" . $imgProduct . "')");
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: " . $address_site . "/personal_account.php");
    $result_query_insert->close();
    $mysqli->close();
} else if (isset($_POST["btn_submit_update_kind"]) && !empty($_POST["btn_submit_update_kind"])) {

    if (isset($_POST["kindProduct"])) {
        $kindProduct = trim($_POST["kindProduct"]);
        if (!empty($kindProduct)) {
            $kindProduct = htmlspecialchars($kindProduct, ENT_QUOTES);
        }
    }

    if (isset($_POST["imgProduct"])) {
        $imgProduct = trim($_POST["imgProduct"]);
        if (!empty($imgProduct)) {
            $imgProduct = htmlspecialchars($imgProduct, ENT_QUOTES);
            $result_query_insert = $mysqli->query("UPDATE `kinds` SET Product_Img='$imgProduct' WHERE Name='$kindProduct'");
        }
    }

    if (isset($_POST["categoryNumber"])) {
        $categoryNumber = trim($_POST["categoryNumber"]);
        if (!empty($categoryNumber)) {
            $categoryNumber = htmlspecialchars($categoryNumber, ENT_QUOTES);
            $result_query_insert = $mysqli->query("UPDATE `kinds` SET ID_Category='$categoryNumber' WHERE Name='$kindProduct'");
        }
    }

    if (isset($_POST["purchasePrice"])) {
        $purchasePrice = trim($_POST["purchasePrice"]);
        if (!empty($purchasePrice)) {
            $purchasePrice = htmlspecialchars($purchasePrice, ENT_QUOTES);
            $result_query_insert = $mysqli->query("UPDATE `kinds` SET Purchase_Price='$purchasePrice' WHERE Name='$kindProduct'");
        }
    }

    if (isset($_POST["tradePrice"])) {
        $tradePrice = trim($_POST["tradePrice"]);
        if (!empty($tradePrice)) {
            $tradePrice = htmlspecialchars($tradePrice, ENT_QUOTES);
            $result_query_insert = $mysqli->query("UPDATE `kinds` SET Trade_Price='$tradePrice' WHERE Name='$kindProduct'");
        }
    }

    if (isset($_POST["sumStorage"])) {
        $sumStorage = trim($_POST["sumStorage"]);
        if (!empty($sumStorage)) {
            $sumStorage = htmlspecialchars($sumStorage, ENT_QUOTES);
            $result_query_insert = $mysqli->query("UPDATE `kinds` SET Sum_Storage='$sumStorage' WHERE Name='$kindProduct'");
        }
    }

    if (isset($_POST["productWeight"])) {
        $productWeight = trim($_POST["productWeight"]);
        if (!empty($productWeight)) {
            $productWeight = htmlspecialchars($productWeight, ENT_QUOTES);
            $result_query_insert = $mysqli->query("UPDATE `kinds` SET Product_Weight='$productWeight' WHERE Name='$kindProduct'");
        }
    }

    if (isset($_POST["newKindProduct"])) {
        $newKindProduct = trim($_POST["newKindProduct"]);
        if (!empty($newKindProduct)) {
            $newKindProduct = htmlspecialchars($newKindProduct, ENT_QUOTES);
            $result_query_insert = $mysqli->query("UPDATE `kinds` SET Name='$newKindProduct' WHERE Name='$kindProduct'");
        }
    }

    header("HTTP/1.1 301 Moved Permanently");
    header("Location: " . $address_site . "/personal_account.php");
    $result_query_insert->close();
    $mysqli->close();
} else if (isset($_POST["btn_submit_drop_kind"]) && !empty($_POST["btn_submit_drop_kind"])) {


    if (isset($_POST["kindProduct"])) {
        $kindProduct = trim($_POST["kindProduct"]);
        if (!empty($kindProduct)) {
            $kindProduct = htmlspecialchars($kindProduct, ENT_QUOTES);
        }
    }

    $result_query_insert = $mysqli->query("DELETE FROM `kinds` WHERE Name='$kindProduct'");
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: " . $address_site . "/personal_account.php");
    $result_query_insert->close();
    $mysqli->close();
} else {
    exit("<p><strong>Ошибка!</strong> Вы зашли на эту страницу напрямую, поэтому нет данных для обработки. Вы можете перейти на <a href=" . $address_site . "> главную страницу </a>.</p>");
}
?>
