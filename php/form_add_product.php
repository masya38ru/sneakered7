<div class=forms id="addProduct">
    <a id="close_addProduct">
        <img src="img/close.jpg" width="20">
    </a>
    <form action="product.php" method="post" name="form_add_product">
        <table>
            <tbody>
            <tr>
                <td> Вид товара:</td>
                <td>
                    <input type="text" list="list_kind" name="kindProduct" pattern="[А-Я]{1}[а-я]{0,}"
                           placeholder="Наименование" required="required">
                </td>
            </tr>
            <tr>
                <td> Дата изготовления:</td>
                <td>
                    <input type="datetime-local" name="datetimeMake" required="required">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" id="btn_submit_add_product" name="btn_submit_add_product" class="buttonAdmin"
                           value="Добавить">
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>
