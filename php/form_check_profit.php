<div class=forms id="checkProfit">
    <a id="close_checkProfit">
        <img src="img/close.jpg" width="20">
    </a>
    <div class="profit">
        <div>
            <p align="center">Прибыль магазина:</p>
            <?php
            $sql = 'SELECT * FROM change_order_status WHERE ID_Status="4"';
            $mysqli = mysqli_connect("localhost", "root", "", "maindb");
            $result = mysqli_query($mysqli, $sql);
            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $num_rows = mysqli_num_rows($result);
            $subtotal = 0;
            for ($i = 0; $i < $num_rows; $i++) {
                $sql_select_kind = 'SELECT * FROM kinds_orders WHERE ID_Order="' . $rows[$i]['ID_Order'] . '"';
                $result_select_kind = mysqli_query($mysqli, $sql_select_kind);
                $rows_select_kind = mysqli_fetch_all($result_select_kind, MYSQLI_ASSOC);
                $num_rows_select_kind = mysqli_num_rows($result_select_kind);
                for ($k = 0; $k < $num_rows_select_kind; $k++) {
                    $sql_select_price = 'SELECT * FROM kinds WHERE ID_Kind="' . $rows_select_kind[$k]['ID_Kind'] . '"';
                    $result_select_price = mysqli_query($mysqli, $sql_select_price);
                    $rows_select_price = mysqli_fetch_all($result_select_price, MYSQLI_ASSOC);
                    $subtotal += $rows_select_price[0]['Trade_Price'] * $rows_select_kind[$k]['Sum_Product'];
                }
            }
            if ($num_rows == 0) {
                ?>
                <p align="center">-</p>
                <?php
            } else {
                ?>
                <p align="center"><?php print($subtotal); ?>₽</p>
                <?php
            }
            ?>
        </div>
    </div>
</div>
