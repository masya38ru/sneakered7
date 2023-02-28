<?php
require_once("header.php");
?>
<div class="block_for_messages">
    <?php
    if (isset($_SESSION["error_messages"]) && !empty($_SESSION["error_messages"])) {
        echo $_SESSION["error_messages"];
        unset($_SESSION["error_messages"]);
    }
    if (isset($_SESSION["success_messages"]) && !empty($_SESSION["success_messages"])) {
        echo $_SESSION["success_messages"];
        unset($_SESSION["success_messages"]);
    }
    ?>
</div>

<?php
if (!isset($_SESSION["email"]) && !isset($_SESSION["password"])) {
    ?>
    <div id="form_register" class="form_beauty">
        <p class="form_beauty">Форма регистрации</p>
        <form action="register.php" method="post" name="form_register">
            <table>
                <tbody>
                <tr>
                    <td> Имя:</td>
                    <td><input type="text" pattern="[А-Я]{1}[а-я]{0,}" placeholder="Плитка" name="first_name"
                               required="required"></td>
                </tr>
                <tr>
                    <td> Фамилия:</td>
                    <td><input type="text" pattern="[А-Я]{1}[а-я]{0,}" placeholder="Боб" name="last_name"></td>
                <tr>
                    <td> Email:</td>
                    <td><input type="email" name="email" required="required"><br>
                        <span id="valid_email_message" class="mesage_error"></span></td>
                </tr>
                <tr>
                    <td> Пароль:</td>
                    <td><input type="password" class="password" name="password" minlength="6"
                               placeholder="Минимум 6 символов" required="required"><br>
                        <span id="valid_password_message" class="mesage_error">
</span></td>
                </tr>
                <tr>
                    <td> Повторите пароль:</td>
                    <td><input type="password" class="repeat_password" name="repeat_password" minlength="6"
                               placeholder="Будьте внимательны" required="required"><br>
                        <span id="valid_password_message" class="mesage_error">
</span></td>
                </tr>
                <tr>
                    <td> Введите капчу:</td>
                    <td><p><img src="captcha.php" alt="Капча"/> <br><br>
                            <input type="text" name="captcha" placeholder="Проверочный код" required="required"></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="btn_submit_register" class="button" value="Регистрация"></td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
    <?php
} else {
    ?>
    <div id="authorized">
        <h2>Вы уже зарегистрированы</h2>
    </div>
    <?php
}
require_once("footer.php");
?>
