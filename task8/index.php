<?php
session_start();
// Написать index.php, который должен содержать простую форму авторизации – только логин и кнопку авторизоваться.
// После авторизации форма должна пропасть и должна появиться надпись – «Привет {$login}» и кнопка Выход.
// Если закрыть браузер и зайти снова – авторизация должна сохраниться.
// После нажатия на Выход – должна снова появиться форма авторизации.
// Логины должны храниться в файле logins.php рядом с index.php в корне сайта.
?>
<?php
/** @var array $logins */

include_once 'logins.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $logout = 0;


    if (array_key_exists('logout', $_POST)) {
        $logout = (int)$_POST['logout'];
    }

    if (!$logout) {
        $login = trim($_POST['login']);
        if (!empty($login)) {
            if (in_array($login, $logins)) {
                $_SESSION['user_session'] = $login;
            }
        }
    } else {
        unset($_SESSION['user_session']);
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <title>Задача 8</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
 <div class="container">
     <div class="row justify-content-center">
         <div class="col-8 my-5">
             <h1 class="t">Задача 8</h1>
             <form action="<?=$_SERVER['PHP_SELF']?>" method="post" class="my-4">
                 <?php if (array_key_exists('user_session', $_SESSION)): ?>
                     <p>Привет <?=$_SESSION['user_session']?></p>
                     <button type="submit" name="logout" value="1" class="btn btn-primary">Выход</button>
                 <?php else: ?>
                     <div class="form-group mb-4">
                         <label for="exampleInputLogin">Поле для ввода логина:</label>
                         <input type="text"
                                class="form-control"
                                id="exampleInputLogin"
                                name="login"
                                placeholder="Введите логин"
                         >
                     </div>
                     <button type="submit" class="btn btn-primary">Авторизоваться</button>
                 <?php endif; ?>
             </form>
         </div>
     </div>

 </div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
