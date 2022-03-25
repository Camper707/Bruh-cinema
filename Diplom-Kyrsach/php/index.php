<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<?php

require('connection.php');

if (isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT_INTO users (username, email, password) VALUES ('$username','$email','$password')";
    $result = mysqli_query($connection, $query);

    if($result){
        $smsg = "Регистрация прошла успешно";
    } else {
        $fsmsg = "Ошибка";
    }
}
?>
    <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php }?>
    <?php if(isset($fsmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fsmsg; ?> </div><?php }?>


    <div class="cd-user-modal"> <!-- все формы на фоне затемнения-->
            <div class="cd-user-modal-container"> <!-- основной контейнер -->
                <ul class="cd-switcher">
                    <li><a href="#0">Вход</a></li>
                    <li><a href="#0">Регистрация</a></li>
                </ul>
    
                <div id="cd-login"> <!-- форма входа -->
                    <form class="cd-form">
                        <p class="fieldset">
                            <label class="image-replace cd-email" for="signin-email">E-mail</label>
                            <input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
                            <span class="cd-error-message">Здесь сообщение об ошибке!</span>
                        </p>
    
                        <p class="fieldset">
                            <label class="image-replace cd-password" for="signin-password">Пароль</label>
                            <input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Пароль">
                            <a href="#0" class="hide-password">Скрыть</a>
                            <span class="cd-error-message">Здесь сообщение об ошибке!</span>
                        </p>
    
                        <p class="fieldset">
                            <input type="checkbox" id="remember-me" checked>
                            <label for="remember-me">Запомнить меня</label>
                        </p>
    
                        <p class="fieldset">
                            <input class="full-width" type="submit" value="Войти">
                        </p>
                    </form>
                    
                    <p class="cd-form-bottom-message"><a href="#0">Забыли свой пароль?</a></p>
                    <!-- <a href="#0" class="cd-close-form">Close</a> -->
                </div> <!-- cd-login -->
    
                <div id="cd-signup"> <!-- форма регистрации -->
                    <form class="cd-form" method="POST" action="index.php">
                        <p class="fieldset">
                            <label class="image-replace cd-username" for="signup-username">Имя пользователя</label>
                            <input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Имя пользователя">
                            <span class="cd-error-message">Здесь сообщение об ошибке!</span>
                        </p>
    
                        <p class="fieldset">
                            <label class="image-replace cd-email" for="signup-email">E-mail</label>
                            <input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
                            <span class="cd-error-message">Здесь сообщение об ошибке!</span>
                        </p>
    
                        <p class="fieldset">
                            <label class="image-replace cd-password" for="signup-password">Пароль</label>
                            <input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Пароль">
                            <a href="#0" class="hide-password">Скрыть</a>
                            <span class="cd-error-message">Здесь сообщение об ошибке!</span>
                        </p>
    
                        <p class="fieldset">
                            <input type="checkbox" id="accept-terms">
                            <label for="accept-terms">Я согласен с <a href="#0">Условиями</a></label>
                        </p>
    
                        <p class="fieldset">
                            <input class="full-width has-padding" type="submit" value="Создать аккаунт">
                        </p>
                    </form>

                </div>
                
                <div id="cd-reset-password"> <!-- форма восстановления пароля -->
                    <p class="cd-form-message">Забыли пароль? Пожалуйста, введите адрес своей электронной почты. Вы получите ссылку, чтобы создать новый пароль.</p>
    
                    <form class="cd-form">
                        <p class="fieldset">
                            <label class="image-replace cd-email" for="reset-email">E-mail</label>
                            <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                            <span class="cd-error-message">Здесь сообщение об ошибке!</span>
                        </p>
    
                        <p class="fieldset">
                            <input class="full-width has-padding" type="submit" value="Восстановить пароль">
                        </p>
                    </form>
    
                    <p class="cd-form-bottom-message"><a href="#0">Вернуться к входу</a></p>
                </div> <!-- cd-reset-password -->
                <a href="#0" class="cd-close-form">Закрыть</a>
            </div> <!-- cd-user-modal-container -->
        </div> <!-- cd-user-modal -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/main.js"></script> <!-- Gem jQuery -->

</body>
</html>