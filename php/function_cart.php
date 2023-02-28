<?php
function pdo_connect_mysql()
{
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'maindb';
    try {
        return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
        exit('Failed to connect to database!');
    }
}

$pdo = pdo_connect_mysql();
$products_in_cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
$products = array();
$subtotal = 0.00;
if ($products_in_cart) {
    $array_to_question_marks = implode(',', array_fill(0, count($products_in_cart), '?'));
    $stmt = $pdo->prepare('SELECT * FROM kinds WHERE ID_Kind IN (' . $array_to_question_marks . ')');
    $stmt->execute(array_keys($products_in_cart));
    $products = $stmt->fetchAll(pdo::FETCH_ASSOC);
    foreach ($products as $product) {
        $subtotal += (float)$product['Trade_Price'] * (int)$products_in_cart[$product['ID_Kind']];
    }
}
if (isset($_GET['remove']) && is_numeric($_GET['remove']) && isset($_SESSION['cart']) && isset($_SESSION['cart'][$_GET['remove']])) {
    unset($_SESSION['cart'][$_GET['remove']]);
    header("Refresh: 0.0001");
}
if (isset($_POST['update']) && isset($_SESSION['cart'])) {
    foreach ($_POST as $key => $value) {
        if (strpos($key, 'quantity') !== false && is_numeric($value)) {
            $id = str_replace('quantity-', '', $key);
            $quantity = (int)$value;
            if (is_numeric($id) && isset($_SESSION['cart'][$id]) && $quantity > 0) {
                $_SESSION['cart'][$id] = $quantity;
                header("Refresh: 0.0001");
            }
        }
    }
} ?>
