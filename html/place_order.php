<div class=forms id="placeOrder">
    <a id="close_placeOrder"><img src="img/close.jpg" width="20"> </a>
    <p>Заполните информацию о себе</p>
    <form action="save_info_buyers.php" method="post" name="place_order">
        <table>
            <tbody>
            <tr>
                <td> Фамилия:</td>
                <td>
                    <input type="text" name="sur" pattern="[А-Я]{1}[а-я]{0,}"
                           placeholder="Боб" <?php if (isset($_SESSION['Surname'])) { ?> value="<?php print($_SESSION['Surname']); ?>" <?php } ?>
                           required="required">
                </td>
            </tr>
            <tr>
                <td> Имя:</td>
                <td>
                    <input type="text" name="name" pattern="[А-Я]{1}[а-я]{0,}"
                           placeholder="Плитка" <?php if (isset($_SESSION['Name'])) { ?> value="<?php print($_SESSION['Name']); ?>" <?php } ?>
                           required="required">
                </td>
            </tr>
            <tr>
                <td> Отчество:</td>
                <td>
                    <input type="text" name="middle"
                           pattern="[А-Я]{1}[а-я]{0,}" <?php if (isset($_SESSION['Middle_Name'])) { ?> value="<?php print($_SESSION['Middle_Name']); ?>" <?php } ?>
                           placeholder="Шоковна">
                </td>
            </tr>
            <tr>
                <td> Email:</td>
                <td>
                    <input type="email" name="email"
                           placeholder="plitka5BOB@shoko.sh" <?php if (isset($_SESSION['Email'])) { ?> value="<?php print($_SESSION['Email']); ?>" <?php } ?>
                           required="required">
                </td>
            </tr>
            <tr>
                <td> Номер телефона:</td>
                <td>
                    <input type="tel" name="tel" pattern="[0-9]{10}"
                           placeholder="9112428085" <?php if (isset($_SESSION['Phone_Number'])) { ?> value="<?php print($_SESSION['Phone_Number']); ?>" <?php } ?>
                           required="required">
                </td>
            </tr>
            <tr>
                <td> Город:</td>
                <td>
                    <input type="text" name="city"
                           placeholder="Екатеринбург" <?php if (isset($_SESSION['City'])) { ?> value="<?php print($_SESSION['City']); ?>" <?php } ?>
                           required="required"></td>
            </tr>
            <tr>
                <td> Улица:</td>
                <td>
                    <input type="text" name="street"
                           placeholder="Трубачева" <?php if (isset($_SESSION['Street'])) { ?> value="<?php print($_SESSION['Street']); ?>" <?php } ?>
                           required="required"></td>
            </tr>
            <tr>
                <td> Номер дома:</td>
                <td>
                    <input type="number" name="num_house" min="1"
                           max="10000" <?php if (isset($_SESSION['House_Number'])) { ?> value="<?php print($_SESSION['House_Number']); ?>" <?php } ?>
                           required="required">
                </td>
            </tr>
            <tr>
                <td> Номер квартиры:</td>
                <td>
                    <input type="number" name="num_ap" min="1"
                           max="10000" <?php if (isset($_SESSION['Apartment_Number'])) { ?> value="<?php print($_SESSION['Apartment_Number']); ?>" <?php } ?>
                           required="required">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" id="saveButton" name="btn_submit_place_order" class="buttonAdmin"
                           value="Сохранить">
                    <input type="reset" name="btn_reset_place_order" class="buttonAdmin" value="Стереть данные"></td>
            </tr>
            </tbody>
        </table>
    </form>
    <p>Закройте форму, чтобы внести изменения в заказ</p>
</div>
