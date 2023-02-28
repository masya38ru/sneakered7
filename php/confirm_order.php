<?php require_once("header.php"); ?>
<div class="item">
    <p>Номер Вашего заказа:  <?php print($_SESSION['ID_Order']); ?></br>Ожидайте подтверждение статуса заказа со стороны
        владельца</p>
</div>
<?php require_once("footer.php"); ?>

Листинг 8. Файл dbconnect.php
<?php
header('Content-Type: text/html; charset=utf-8');
$server = "localhost";
$username = "root";
$password = "";
$database = "maindb";
$mysqli = new mysqli($server, $username, $password, $database);
if ($mysqli->connect_errno) {
    die("<p><strong>Ошибка подключения к БД</strong></p><p><strong>Код ошибки: </strong> " . $mysqli->connect_errno . " </p><p><strong>Описание ошибки:</strong> " . $mysqli->connect_error . "</p>");
}
$mysqli->set_charset('utf8');
$address_site = "http://localhost";
?>
