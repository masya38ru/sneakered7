<div class=forms id="addCategory">
    <a id="close_addCategory">
        <img src="img/close.jpg" width="20">
    </a>
    <form action="category.php" method="post" name="form_add_category">
        <table>
            <tbody>
            <tr>
                <td> Категория товара:</td>
                <td>
                    <input type="text" name="categoryProduct" pattern="[А-Я]{1}[а-я]{0,}" placeholder="Наименование"
                           required="required">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="btn_submit_add_category" class="buttonAdmin" value="Добавить">
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>
