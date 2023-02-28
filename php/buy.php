<?php
session_start();
require_once("dbconnect.php");
//Проверяем, что нажата кнопка
if (isset($_POST["btn_submit_buy"]) && !empty($_POST["btn_submit_buy"])){
//Запоминаем в переменные количество товара и его ID
    if (isset($_POST["id_kind"])) {
        $id_kind = trim($_POST["id_kind"]);
        if (!empty($id_kind)) {
            $id_kind = htmlspecialchars($id_kind, ENT_QUOTES);
        }
    }

    if (isset($_POST["quantity"])) {
        $quantity = trim($_POST["quantity"]);
        if (!empty($quantity)) {
            $quantity = htmlspecialchars($quantity, ENT_QUOTES);
        }
    }
// Теперь мы можем создать /обновить переменную сеанса для корзины
    if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
        if (array_key_exists($id_kind, $_SESSION['cart'])) {
// Товар уже есть в корзине, поэтому просто обновите количество
            $_SESSION['cart'][$id_kind] += $quantity;
        } else {
// Товара нет в корзине, поэтому добавьте его
            $_SESSION['cart'][$id_kind] = $quantity;
        }
    } else {
// В корзине нет товаров, это добавит первый товар в корзину
        $_SESSION['cart'] = array($id_kind => $quantity);
    }
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: " . $address_site . "/shopping_cart.php");
}else {
    exit("<p><strong>Ошибка!</strong> Вы зашли на эту страницу напрямую, поэтому нет данных для обработки. Вы можете перейти на <a href=" . $address_site . "> главную страницу </a>.</p>");
}

?>
