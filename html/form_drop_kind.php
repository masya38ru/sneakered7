<div class=forms id="dropKind">
    <a id="close_dropKind">
        <img src="img/close.jpg" width="20">
    </a>
    <form action="kind.php" method="post" name="form_drop_kind">
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
                <td colspan="2">
                    <input type="submit" id="btn_submit_drop_kind" name="btn_submit_drop_kind" class="buttonAdmin"
                           value="Удалить">
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>
