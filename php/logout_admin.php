<?php
//Запускаем сессию
session_start();

unset($_SESSION["email"]);
unset($_SESSION["password"]);
unset($_SESSION["flag"]);
unset($_SESSION["cart"]);
unset($_SESSION["email_order"]);
unset($_SESSION["ID_Addresse"]);
unset($_SESSION["Surname"]);
unset($_SESSION["Name"]);
unset($_SESSION["Phone_Number"]);
unset($_SESSION["Email"]);
unset($_SESSION["Middle_Name"]);
unset($_SESSION["City"]);
unset($_SESSION["Street"]);
unset($_SESSION["House_Number"]);
unset($_SESSION["Apartment_Number"]);
// Возвращаем пользователя на ту страницу, на которой он нажал на кнопку выход.
header("HTTP/1.1 301 Moved Permanently");
header("Location: " . $address_site . "/index.php");
?>
