<?php
/*
Есть эталонный список с перечнем обязательных полей: ФИО, телефон, возраст.
Пользователь отправил на сервер заполненную форму:
ФИО: Никифоров Николай Иванович
Гражданство: РФ
Телефон: 323232
Хобби:
Телефон:
Возраст: 27
Пол: мужской
Нужно проверить, что в полученной форме заполнены поля, перечисленные в эталонном списке.
 */
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fio = !empty(trim($_POST['fio'])) ? trim($_POST['fio']): 'Поле fio обязательно';
    $phone = !empty(trim($_POST['phone'])) ? trim($_POST['phone']): 'Поле phone обязательно';
    $age = !empty(trim($_POST['age'])) ? trim($_POST['age']): 'Поле age обязательно';
    $citizenship = trim($_POST['citizenship']);
    $hobby = trim($_POST['hobby']);
    $sex = trim($_POST['sex']);
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Задача 2</title>
</head>
<body>
    <div class="container">
        <div class="col my-5">
            <h1>Задача 2</h1>
        </div>
        <div class="col my-5">
            <form method="post" action="<?=$_SERVER['PHP_SELF']?>">
                <div class="mb-3">
                    <label for="fio" class="form-label">ФИО</label>
                    <input type="text" class="form-control" id="fio" name="fio">
                </div>
                <div class="mb-3">
                    <label for="citizenship" class="form-label">Гражданство</label>
                    <input type="text" class="form-control" id="citizenship" name="citizenship">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Телефон</label>
                    <input type="text" class="form-control" id="phone" name="phone">
                </div>
                <div class="mb-3">
                    <label for="hobby" class="form-label">Хобби</label>
                    <input type="text" class="form-control" id="hobby" name="hobby">
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label">Возраст</label>
                    <input type="text" class="form-control" id="age" name="age">
                </div>
                <div class="mb-3">
                    <label for="sex" class="form-label">Пол</label>
                    <input type="text" class="form-control" id="sex" name="sex">
                </div>
                <button type="submit" class="btn btn-primary">Отправить</button>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="result">
                    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
                        <h3>Результат проверки:</h3>
                        <ul>
                            <li><span>ФИО:</span> <?=$fio?></li>
                            <li><span>Номер телефона:</span> <?=$phone?></li>
                            <li><span>Возраст:</span> <?=$age?></li>
                            <li><span>Гражданство:</span> <?=$citizenship?></li>
                            <li><span>Хобби:</span> <?=$hobby?></li>
                            <li><span>Пол:</span> <?=$sex?></li>
                        </ul>
                    <?php endif; ?>
                </div>
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