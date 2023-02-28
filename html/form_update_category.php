<div class=forms id="updateCategory">
    <a id="close_updateCategory">
        <img src="img/close.jpg" width="20">
    </a>
    <form action="category.php" method="post" name="form_update_category">
        <table>
            <tbody>
            <tr>
                <td> Категория товара:</td>
                <td>
                    <input type="text" list="list" name="categoryProduct" pattern="[А-Я]{1}[а-я]{0,}"
                           placeholder="Наименование" required="required">
                    <datalist id="list">
                        <?php
                        foreach ($rows_category as $row_category) {
                            print("<option value='" . $row_category['Name'] . "'></option>");
                        }
                        ?>
                    </datalist>
                </td>
            </tr>
            <tr>
                <td> Новое название категории товара:</td>
                <td>
                    <input type="text" name="newCategoryProduct" pattern="[А-Я]{1}[а-я]{0,}" placeholder="Наименование"
                           required="required">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="btn_submit_update_category" class="buttonAdmin" value="Обновить">
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>
