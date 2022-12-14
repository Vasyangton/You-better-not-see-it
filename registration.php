<?php
session_start();

if ($_SESSION['user']) {
  header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Морской бой</title>
    <link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/emojionearea.min.css">
    <link rel="stylesheet" href="css/style.css?version=123456">
</head>

<body>
    <section class="blue-section registration-section">
        <div class="container">
            
            <h1 class="blue__title t-title">Станьте <br>участником <br class="hidden-lg">игры</h1>
            <form class="blue__form registration__form" action="vector/regi.php" method="post">
                <div class="title">укажите ваши
                    <br class="hidden-lg">данные</div>
                <input class="input" type="text" name="name" placeholder="Ваше имя" required>
                <input class="input" type="tel" name="tell" placeholder="Ваш номер телефона" required>
                <input class="input" type="password" name="pass" placeholder="Ваш пароль" required>
                <input class="input" type="password" name="pass_conf" placeholder="Подтвердите Ваш пароль" required>
                <button class="t-btn" type="submit">зарегистрироваться</button>
                <div class="privacy">Нажимая кнопку, вы соглашаетесь
                    <br class="hidden-lg">с <a href="privacy.html">политикой конфиденциальности </a>
                </div>
                <br>
                <?php
                if ($_SESSION['message']) {
                  echo '<p style="color: orange; margin: 1px;">' . $_SESSION['message'] . '</p>';
                }
                unset($_SESSION['message']);
                ?>
                <br>
                <a href="signin.php">У вас уже есть аккаунт? - Авторизируйтесь</a>
            </form>
            <img class="blue__img" src="img/blue__img.png" alt="">
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.4/moment-timezone-with-data.js"></script>
    <script src="js/emojionearea.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/main.js?version=123456"></script>
</body>

</html>
