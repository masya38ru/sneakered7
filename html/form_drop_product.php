<div class=forms id="dropProduct">
    <a id="close_dropProduct">
        <img src="img/close.jpg" width = "20">
    </a>
    <form action="product.php" method="post" name="form_drop_product">
        <table>
            <tbody>
            <tr>
                <td> Дата истечения срока годности: </td>
                <td>
                    <input  type="datetime-local" name="datetimeEnd" required="required">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit"  id="btn_submit_drop_product" name="btn_submit_drop_product" class="buttonAdmin" value="Списать">
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>
