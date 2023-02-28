<?php
session_start();
require_once("dbconnect.php");
if (isset($_POST["btn_submit_place_order"]) && !empty($_POST["btn_submit_place_order"])) {

    if (isset($_POST["sur"])) {
        $sur = trim($_POST["sur"]);
        if (!empty($sur)) {
            $sur = htmlspecialchars($sur, ENT_QUOTES);
            $_SESSION['Surname'] = $sur;
        }
    }

    if (isset($_POST["name"])) {
        $name = trim($_POST["name"]);
        if (!empty($name)) {
            $name = htmlspecialchars($name, ENT_QUOTES);
            $_SESSION['Name'] = $name;
        }
    }

    if (isset($_POST["tel"])) {
        $tel = trim($_POST["tel"]);
        if (!empty($tel)) {
            $tel = htmlspecialchars($tel, ENT_QUOTES);
            $_SESSION['Phone_Number'] = $tel;
        }
    }


    $email = trim($_POST["email"]);
    $email = htmlspecialchars($email, ENT_QUOTES);
    $_SESSION['Email'] = $email;

    if (isset($_POST["middle"])) {
        $middle = trim($_POST["middle"]);
        if (!empty($middle)) {
            $middle = htmlspecialchars($middle, ENT_QUOTES);
            $_SESSION['Middle_Name'] = $middle;
        }
    }
    if (isset($_POST["city"])) {
        $city = trim($_POST["city"]);
        if (!empty($city)) {
            $city = htmlspecialchars($city, ENT_QUOTES);
        }
    }

    if (isset($_POST["street"])) {
        $street = trim($_POST["street"]);
        if (!empty($street)) {
            $street = htmlspecialchars($street, ENT_QUOTES);
        }
    }

    if (isset($_POST["num_house"])) {
        $num_house = trim($_POST["num_house"]);
        if (!empty($num_house)) {
            $num_house = htmlspecialchars($num_house, ENT_QUOTES);
        }
    }

    if (isset($_POST["num_ap"])) {
        $num_ap = trim($_POST["num_ap"]);
        if (!empty($num_ap)) {
            $num_ap = htmlspecialchars($num_ap, ENT_QUOTES);
        }
    }
    $_SESSION['email_order'] = $email;
    $mysqli->close();
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: " . $address_site . "/order_info.php");
} else {
    exit("<p><strong>Ошибка!</strong> Вы зашли на эту страницу напрямую, поэтому нет данных для обработки. Вы можете перейти на <a href=" . $address_site . "> главную страницу </a>.</p>");
} ?>
