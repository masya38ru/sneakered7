<?php
require_once("header.php");
require_once("function_cart.php");
$sql_buyers = 'SELECT Name, Surname, Middle_Name, Email, Phone_Number FROM buyers WHERE Email="' . $_SESSION['email_order'] . '"';
$mysqli = mysqli_connect("localhost", "root", "", "maindb");
$result_buyers = mysqli_query($mysqli, $sql_buyers);
$rows_buyers = mysqli_fetch_all($result_buyers, MYSQLI_ASSOC);

$sql_addresse = 'SELECT City, Street, House_Number, Apartment_Number FROM addresses WHERE ID_Addresse="' . (int)$_SESSION['ID_Addresse'] . '"';
$result_addresse = mysqli_query($mysqli, $sql_addresse);
$rows_addresse = mysqli_fetch_all($result_addresse, MYSQLI_ASSOC);
?>

<div class="item">
    <form action="save_info_orders.php" method="post" name="form_product">
        <div class="choice">
            <div>
                <table border="5" bordercolor="#FFC0CB">
                    <caption class="zag">Личные данные покупателя</caption>
                    <tr>
                        <th align="center">Фамилия</th>
                        <td align="center"><?php print($_SESSION['Surname']); ?></td>
                    </tr>
                    <tr>
                        <th align="center">Имя</th>
                        <td align="center"><?php print($_SESSION['Name']); ?></td>
                    </tr>
                    <tr>
                        <th align="center">Отчество</th>
                        <td align="center"><?php print($_SESSION['Middle_Name']); ?></td>
                    </tr>
                    <tr>
                        <th align="center">Номер телефона</th>
                        <td align="center"><?php print($_SESSION['Phone_Number']); ?></td>
                    </tr>
                    <tr>
                        <th align="center">Электронная почта</th>
                        <td align="center"><?php print($_SESSION['Email']); ?></td>
                    </tr>
                </table>
                <p>Подтвердите свой заказ </br>или вернитесь к<a href="shopping_cart.php">корзине,</a></br>чтобы внести
                    изменения</p>
            </div>
            <div><p></p></div>
            <div>
                <table border="5" bordercolor="#FFC0CB">
                    <caption class="zag">Информация о выбранном товаре</caption>
                    <tr>
                        <th colspan="2" align="center">Товар</th>
                        <th align="center">Количество</th>
                        <th align="center">Стоимость</th>
                    </tr>
                    <?php foreach ($products as $product) { ?>
                        <tr>
                            <td align="center"><img src="img/<?= $product['Product_Img'] ?>" width="120"
                                                    alt="<?= $product['Name'] ?>"></td>
                            <td align="center"><?= $product['Name'] ?></td>
                            <td align="center"><?= $products_in_cart[$product['ID_Kind']] ?></td>
                            <td align="center"><?= $product['Trade_Price'] * $products_in_cart[$product['ID_Kind']] ?>
                                ₽
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
        <div class="choice2">
            <p>К оплате: <?= $subtotal ?>₽</p></br>
            <button type="submit" name="btn_submit_save_order" class="buttonBuy">Оформить заказ</button>
        </div>
    </form>
</div>
<?php require_once("footer.php"); ?>
