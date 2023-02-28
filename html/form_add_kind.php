<div class=forms id="addKind">
    <a id="close_addKind">
        <img src="img/close.jpg" width="20">
    </a>
    <form action="kind.php" method="post" name="form_add_kind">
        <table>
            <tbody>
            <tr>
                <td> Изображение:</td>
                <td>
                    <input type="file" name="imgProduct" accept="image/*" required="required">
                </td>
            </tr>
            <tr>
                <td> Вид товара:</td>
                <td>
                    <input type="text" name="kindProduct" pattern="[А-Я]{1}[а-я]{0,}" placeholder="Наименование"
                           required="required">
                </td>
            </tr>
            <tr>
                <td> Номер категории:</td>
                <td>
                    <input type="number" list="list_category" name="categoryNumber" min="1"
                           max="<?php print($num_rows_category); ?>" required="required">
                </td>
            </tr>
            <tr>
                <td> Цена в закупке:</td>
                <td>
                    <input type="number" name="purchasePrice" min="1">
                </td>
            </tr>
            <tr>
                <td> Цена продажи:</td>
                <td>
                    <input type="number" name="tradePrice" required="required" min="1">
                </td>
            </tr>
            <tr>
                <td> Количество в магазине:</td>
                <td>
                    <input type="number" name="sumStorage" min="0">
                </td>
            </tr>
            <tr>
                <td> Вес изделия:</td>
                <td>
                    <input type="number" name="productWeight" min="1">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" id="btn_submit_add_kind" name="btn_submit_add_kind" class="buttonAdmin"
                           value="Добавить">
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>
