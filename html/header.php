<?php
//Запускаем сессию
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sneakered</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <script src="../js/jquery.js"></script>
    <script>
        $(document).ready(function () {
            "use strict";
            $(".repeat_password").on("keyup", function () {
                    var value_input1 = $(".password").val();
                    var value_input2 = $(".repeat_password").val();
                    if (value_input1 !== value_input2) {
                        $(".repeat_password_error").html("Пароли не совпадают!");
                        $("#submit").attr("disabled", "disabled");
                    } else {
                        $("#submit").removeAttr("disabled");
                        $(".repeat_password_error").html("");
                    }
                }
            )
        })
    </script>
</head>
<body>
<div id="top">
    <div id="logo">
        <a class="buttonIcon" href="index.php">
            <img src="../logo148.png" alt="logo" width="148" height="148">
        </a>
    </div>
    <a class="button" href="about_company.php"> О&nbsp;КОМПАНИИ </a>
    <a class="button" href="category.php"> ГАЛЕРЕЯ </a>
    <a class="button" href="#"> КАТАЛОГ </a>
    <a class="button" href="#"> ОТЗЫВЫ </a>
    <?php
    if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) { ?>
        <div id="link_auth">
            <a href="form_auth.php"><img src="../icon_profile.png" alt="Иконка авторизации" width="64" height="64"> </a>
        </div>
        <?php
    } else {
        ?>
        <div id="link_logout">
            <a href="logout.php"><img src="../icon_profile.png" alt="Иконка выхода" width="64" height="64"></a></div>
        <?php
    }
    ?>
</div>
