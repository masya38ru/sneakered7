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


    <div id="form_auth" class="form_beauty">
        <p class="form_beauty">Форма авторизации</p>
        <form action="auth.php" method="post" name="form_auth">
            <table>
                <tbody>
                <tr>
                    <td> Email:</td>
                    <td><input type="email" name="email" required="required"><br>
                        <span id="valid_email_message" class="mesage_error"></span>
                    </td>
                </tr>
                <tr>
                    <td> Пароль:</td>
                    <td><input type="password" name="password" required="required"><br>
                        <span id="valid_password_message" class="mesage_error"></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" class="button" name="btn_submit_auth" value="Вход">
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
    <div class="ref_reg">
        <p>У вас нет аккаунта? <a href="form_register.php">Зарегестрируйтесь</a>!</p></div>

    <?php
} else {
    ?>
    <div id="authorized"><h2>Вы уже авторизованы</h2></div>

    <?php
}
?>

<?php
require_once("footer.php");
?>
