<?php
require_once("header.php");
require_once("dbconnect.php");
$sql1 = 'SELECT ID_Buyer FROM buyers WHERE Email="' . $_SESSION['email'] . '"';
$result_query_select_id = mysqli_query($mysqli, $sql1);
$rows_query_select = mysqli_fetch_all($result_query_select_id, MYSQLI_ASSOC);
$ID_Buyer = $rows_query_select[0]['ID_Buyer'];

$sql = 'SELECT * FROM orders WHERE ID_Buyer="' . $ID_Buyer . '"';
$result = mysqli_query($mysqli, $sql);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
$num_rows = mysqli_num_rows($result);
for ($i = $num_rows - 1; $i >= 0; $i--) {
    ?>

    <section class="item">
        <table border="5" bordercolor="#FFC0CB">
            <caption class="zag"><?php print('Номер заказа: ' . $rows[$i]['ID_Order'] . ''); ?></caption>
            <tr>
                <th align="center" width="300" colspan="4" style="background-color:Pink">Товар</th>
                <th align="center" width="200" colspan="2" style="background-color:Pink">Стоимость</th>
                <th align="center" width="200" colspan="2" style="background-color:Pink">Количество</th>
            </tr>
            <?php
            $sql4 = 'SELECT * FROM change_order_status WHERE ID_Order="' . $rows[$i]['ID_Order'] . '"';
            $result_sql4 = mysqli_query($mysqli, $sql4);
            $rows_sql4 = mysqli_fetch_all($result_sql4, MYSQLI_ASSOC);
            $num_rows_sql4 = mysqli_num_rows($result_sql4);

            $num = $num_rows_sql4 - 1;

            $sql5 = 'SELECT * FROM status WHERE ID_Status ="' . $rows_sql4[$num]['ID_Status'] . '"';
            $result_sql5 = mysqli_query($mysqli, $sql5);
            $rows_sql5 = mysqli_fetch_all($result_sql5, MYSQLI_ASSOC);

            $sql3 = 'SELECT * FROM kinds_orders WHERE ID_Order="' . $rows[$i]['ID_Order'] . '"';
            $result_sql3 = mysqli_query($mysqli, $sql3);
            $rows_sql3 = mysqli_fetch_all($result_sql3, MYSQLI_ASSOC);
            $num_rows_sql3 = mysqli_num_rows($result_sql3);

            for ($k = 0; $k < 1; $k++) {
                $_SESSION['subtotal'] = 0;
                for ($m = 0; $m < $num_rows_sql3; $m++) {

                    $sql2 = 'SELECT * FROM kinds WHERE ID_Kind="' . $rows_sql3[$m]['ID_Kind'] . '"';
                    $result_sql2 = mysqli_query($mysqli, $sql2);
                    $rows_sql2 = mysqli_fetch_all($result_sql2, MYSQLI_ASSOC);

                    $_SESSION['subtotal'] += $rows_sql3[$m]['Sum_Product'] * $rows_sql2[0]['Trade_Price'];
                    ?>
                    <tr>
                        <td align="center" height="120" width="120" colspan="2"><img
                                    src="img/<?php print($rows_sql2[0]['Product_Img']); ?>" width="120"
                                    alt="<?= $product['Name'] ?>"></td>
                        <td align="center" width="180" colspan="2"><?php print($rows_sql2[0]['Name']); ?></td>
                        <td align="center" colspan="2"><?php print($rows_sql2[0]['Trade_Price']); ?></td>
                        <td align="center" colspan="2"><?php print($rows_sql3[$m]['Sum_Product']); ?></td>
                    </tr>
                <?php } ?>
                <tr>
                    <th align="center" style="background-color:Pink" colspan="2">К оплате</th>
                    <td align="center" colspan="2"><?= $_SESSION['subtotal'] ?>₽</td>
                    <th align="center" style="background-color:Pink" colspan="2">Дата создания заказа</th>
                    <td align="center" colspan="2"><?php print($rows[$i]['Date_Complete']); ?></td>
                </tr>
                <tr>
                    <th align="center" style="background-color:Pink" colspan="2">Статус заказа</th>
                    <td align="center" colspan="2"><?php print($rows_sql5[0]['Name']); ?></td>
                    <th align="center" style="background-color:Pink" colspan="2">Дата оформления заказа</th>
                    <td align="center" colspan="2"><?php if ($num_rows_sql4 > 1) {
                            print($rows_sql4[$num]['Date_Change']);
                        } else {
                            print('-');
                        } ?></td>
                </tr>
            <?php } ?>
        </table>
    </section>
    <?php
}
require_once("footer.php");
?>
