<div class=forms id="addOrder">
    <a id="close_addOrder">
        <img src="img/close.jpg" width="20">
    </a>
    <div class="profit">
        <form action="status.php" method="post" name="form_add_order">
            <table>
                <tbody>
                <tr>
                    <td> Номер заказа:</td>
                    <td>
                        <input type="number" list="list_order" name="idOrder" min="1"
                               max="<?php print($num_rows_order); ?>" value="<?php if (isset($_SESSION['ID_Order'])) {
                            print($_SESSION['ID_Order']);
                        } ?>" required="required">
                        <datalist id="list_order">
                            <?php
                            foreach ($rows_order as $row_order) {
                                $value_order = array_search($row_order, $rows_order) + 1;
                                print("<option value='" . $value_order . "'></option>");
                            }
                            ?>
                        </datalist>
                    </td>
                    <td colspan="2">
                        <input type="submit" name="btn_submit_more_info" value="Подробнее">
                    </td>
                </tr>
                <tr>
                    <td>Новый статус:</td>
                    <td>
                        <input type="number" list="list_status" name="idStatus" min="1" max="4">
                        <datalist id="list_status">
                            <?php
                            foreach ($rows_status as $row_status) {
                                $value_status = array_search($row_status, $rows_status) + 1;
                                print("<option value='" . $value_status . " - " . $row_status['Name'] . "'></option>");
                            }
                            ?>
                        </datalist>
                    </td>
                </tr>
                <tr>
                    <td align="center" colspan="3">
                        <input type="submit" name="btn_submit_update_status" class="buttonAdmin" value="Обновить">
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>
