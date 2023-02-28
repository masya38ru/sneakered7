<div class=forms id="updateKind">
    <a id="close_updateKind">
        <img src="img/close.jpg" width="20">
    </a>
    <form action="kind.php" method="post" name="form_update_kind">
        <table>
            <tbody>
            <tr>
                <td> Вид товара:</td>
                <td>
                    <input type="text" list="list_kind" name="kindProduct" pattern="[А-Я]{1}[а-я]{0,}"
                           placeholder="Наименование" required="required">
                    <datalist id="list_kind">
                        <?php
                        foreach ($rows_kind as $row_kind) {
                            print("<option value='" . $row_kind['Name'] . "'></option>");
                        }
                        ?>
                    </datalist>
                </td>
            </tr>
            <tr>
                <td> Новое название вида товара:</td>
                <td>
                    <input type="text" name="newKindProduct" pattern="[А-Я]{1}[а-я]{0,}" placeholder="Наименование">
                </td>
            </tr>
            <tr>
                <td> Новое изображение:</td>
                <td>
                    <input type="file" name="imgProduct" accept="image/*">
                </td>
            </tr>
            <tr>
                <td> Новый номер категории:</td>
                <td>
                    <input type="number" list="list_category" name="categoryNumber" min="1"
                           max="<?php print($num_rows_category); ?>">
                    <datalist id="list_category">
                        <?php
                        foreach ($rows_category as $row_category) {
                            $value_category = array_search($row_category, $rows_category) + 1;
                            print("<option value='" . $value_category . " - " . $row_category['Name'] . "'></option>");
                        }
                        ?>
                    </datalist>
                </td>
            </tr>
            <tr>
                <td> Новая цена в закупке:</td>
                <td>
                    <input type="number" name="purchasePrice" min="1">
                </td>
            </tr>
            <tr>
                <td> Новая цена продажи:</td>
                <td>
                    <input type="number" name="tradePrice" min="1">
                </td>
            </tr>
            <tr>
                <td> Новое количество в магазине:</td>
                <td>
                    <input type="number" name="sumStorage" min="0">
                </td>
            </tr>
            <tr>
                <td> Новый вес изделия:</td>
                <td>
                    <input type="number" name="productWeight" min="1">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" id="btn_submit_update_kind" name="btn_submit_update_kind" class="buttonAdmin"
                           value="Обновить">
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>
