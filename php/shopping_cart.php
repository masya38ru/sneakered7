<?php
require_once("header.php");
require_once("function_cart.php");
?>
<script src="script1.js"></script>
<div class="item">
    <div>
        <?php if (empty($products)) { ?>
            <div>
                <p style="text-align:center;">Вы ещё не добавили продукты в корзину</p>
            </div>
        <?php } else { ?>
            <form action="shopping_cart.php" method="post">
                <table class="table">
                    <thead class="buttonsCart">
                    <tr>
                        <td colspan="2">Товар</td>
                        <td width="130">Стоимость</td>
                        <td width="130">Количество</td>
                        <td width="130">Итог</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($products as $product) { ?>
                        <tr>
                            <td class="img">
                                <img src="img/<?= $product['Product_Img'] ?>" width="120" alt="<?= $product['Name'] ?>">
                            </td>
                            <td>
                                <p><?= $product['Name'] ?></p><br>
                                <a class="remove" id="removeButton"
                                   href="shopping_cart.php?&remove=<?= $product['ID_Kind'] ?>">Удалить</a></td>
                            <td class="price" align="center"><?= $product['Trade_Price'] ?>₽</td>
                            <td class="quantity" align="center">
                                <input type="number" id="quantityButton" name="quantity-<?= $product['ID_Kind'] ?>"
                                       value="<?= $products_in_cart[$product['ID_Kind']] ?>" min="0" max="99"
                                       placeholder="Quantity" required></td>
                            <td class="price"
                                align="center"><?= $product['Trade_Price'] * $products_in_cart[$product['ID_Kind']] ?>₽
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                <div class="subtotal" align="right">
                    <span class="text">К оплате:</span>
                    <span class="price"><?= $subtotal ?>₽</span>
                </div>
                <div class="buttonsCart">
                    <button type="submit" class="buttonAdmin" id="updateButton" name="update">Обновить</button>
                    <button type="button" class="buttonAdmin" id="placeOrderButton">Сделать заказ</button>
                </div>
            </form>
        <?php } ?>
    </div>
    <?php require_once("place_order.php"); ?>
</div>
<?php require_once("footer.php"); ?>
