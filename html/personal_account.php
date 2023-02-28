<?php
require_once("header.php");
$mysqli = mysqli_connect("localhost", "root", "", "maindb");

$sql_category = 'SELECT Name FROM category';
$result_category = mysqli_query($mysqli, $sql_category);
$rows_category = mysqli_fetch_all($result_category, MYSQLI_ASSOC);
$num_rows_category = mysqli_num_rows($result_category);

$sql_kind = 'SELECT Name, ID_Category, Purchase_Price, Sum_Storage, Product_Img, Trade_Price, Product_Weight  FROM kinds';
$result_kind = mysqli_query($mysqli, $sql_kind);
$rows_kind = mysqli_fetch_all($result_kind, MYSQLI_ASSOC);

$sql_status = 'SELECT Name, ID_Status FROM status';
$result_status = mysqli_query($mysqli, $sql_status);
$rows_status = mysqli_fetch_all($result_status, MYSQLI_ASSOC);

$sql_order = 'SELECT ID_Order FROM orders';
$result_order = mysqli_query($mysqli, $sql_order);
$rows_order = mysqli_fetch_all($result_order, MYSQLI_ASSOC);
$num_rows_order = mysqli_num_rows($result_order);

?>
<script src="script.js"></script>

<div class="item">
    <div class=buttons>
        <section class="section_buttons">
            <button id="addButtonOrder" class="buttonAdmin"> Изменение статуса заказа</button>
            <button id="addButtonProduct" class="buttonAdmin"> Поступление товара</button>
            <button id="addButtonCategory" class="buttonAdmin"> Добавить категорию товара</button>
            <button id="updateButtonCategory" class="buttonAdmin"> Редактировать категорию товара</button>
            <button id="dropButtonCategory" class="buttonAdmin"> Удалить категорию товара</button>
        </section>
        <section class="section_buttons">
            <button id="checkButtonProfit" class="buttonAdmin"> Расчет прибыли</button>
            <button id="dropButtonProduct" class="buttonAdmin"> Списание товара</button>
            <button id="addButtonKind" class="buttonAdmin"> Добавить вид товара</button>
            <button id="updateButtonKind" class="buttonAdmin"> Редактировать вид товара</button>
            <button id="dropButtonKind" class="buttonAdmin"> Удалить вид товара</button>
        </section>
    </div>
    <?php
    require_once("form_add_order.php");
    require_once("form_check_profit.php");
    require_once("form_add_product.php");
    require_once("form_drop_product.php");
    require_once("form_add_category.php");
    require_once("form_update_category.php");
    require_once("form_drop_category.php");
    require_once("form_add_kind.php");
    require_once("form_update_kind.php");
    require_once("form_drop_kind.php");
    ?>
</div>
<?php
require_once("footer.php");
?>
