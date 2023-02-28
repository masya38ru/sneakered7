<div class=forms id="dropCategory">
    <a id="close_dropCategory">
        <img src="img/close.jpg" width="20">
    </a>
    <form action="category.php" method="post" name="form_drop_category">
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
                <td colspan="2">
                    <input type="submit" name="btn_submit_drop_category" class="buttonAdmin" value="Удалить">
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>
