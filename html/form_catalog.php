<?php
require_once("header.php");
$sql = 'SELECT ID_Kind, Name, Product_Img, Trade_Price, Product_Weight FROM kinds';
$mysqli = mysqli_connect("localhost", "root", "", "maindb");
$result = mysqli_query($mysqli, $sql);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
$num_rows = mysqli_num_rows($result);
if ($num_rows > 4) {
    $num_cycl = 1 + intdiv($num_rows, 4);
    for ($i = 1; $i <= $num_cycl; $i++) {
        ?>

        <section class="item">

            <?php
            for ($k = 1; $k <= 4; $k++) {
                $m = 4 * $i - 1 - (4 - $k);
                if (isset($rows[$m])) {
                    ?>

                    <form action="buy.php" method="post" name="form_product">
                        <h1 class="item-title" name="item-title"> <?php print($rows[$m]['Name']); ?> </h1>
                        <img src="img/<?php print($rows[$m]['Product_Img']); ?> " width="250">
                        <p class="item-title"><?php print("Стоимость: " . $rows[$m]['Trade_Price'] . " ₽"); ?></p>
                        <p class="item-title"><?php print("Вес: " . $rows[$m]['Product_Weight'] . " г"); ?> </p>
                        <input type="hidden" name="id_kind" value="<?php print($rows[$m]['ID_Kind']); ?>">
                        <section id="choice">
                            <div>
                                <input type="submit" name="btn_submit_buy" class="buttonBuy" value="Добавить в корзину">
                            </div>
                            <div>
                                <input type="number" name="number" class="number" min="1" max="30" required="required">
                            </div>
                        </section>
                    </form>

                <?php }
            } ?>

        </section>

    <?php }
} ?>
<?php require_once("footer.php"); ?>
