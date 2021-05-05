<?php 
require_once('private/includes/dbconnection.php');
require_once('private/includes/querys.php');
require('private/includes/findById.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ЕЛЕКТРОННО ЗАЯВЛЕНИЕ </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="wrapper">
        <header>
            <div class="container">
                <div>
                    <div>
                        <img src="assets/logo.png"><br>
                    </div>
                    <div>
                        <div>
                            <h1>УНИВЕРСИТЕТ ПО БИБЛИОТЕКОЗНАНИЕ И<br>ИНФОРМАЦИОННИ ТЕХНОЛОГИИ </h1>
                            <h2>ЦЕНТЪР ЗА ДИСТАНЦИОННО ОБУЧЕНИЕ</h2>
                            <h3>ЕЛЕКТРОННО ЗАЯВЛЕНИЕ<br><span style="font-size: 16px;">за кандидатстване за обучение в ОКС Магистър</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </header>
<style>
    .head{
        font-size: 1.5em;
    }
</style>
<div class="frame">
<strong class="head">Лични данни</strong><hr>
<strong>Три имена: </strong><?php echo $_POST['fname']. ' ' . $_POST['sname']. ' ' . $_POST['lname']; ?><br>
<strong>ЕГН: </strong><?php echo $_POST['egn'];?><br>
<strong>Адрес: </strong><?php echo $_POST['address'];?><br>
<strong>Електронна поща: </strong><?php echo $_POST['email'];?><br><br>

<strong class="head">Академични дании</strong><hr>
<strong>Факултет: </strong><?php echo $_POST['faculty']?><br>
<strong>Записан(а) за семестър: </strong><?php echo $_POST['status']?><br>
<strong>Семестър: </strong><?php echo $_POST['semester']?><br>
<strong>Курс: </strong><?php echo $_POST['course']?><br>
<strong>Образователно - квалификационна степен: </strong><?php echo $_POST['oks']?><br>
<strong>Специалност: </strong><?php echo $_POST['specialty']?><br>
<strong>Факултетен номер: </strong><?php echo $_POST['facnum'];?><br>
<strong>Уверението се дава за да послужи пред: </strong><?php echo $_POST['for'];?><br><br>
<input class="btn btn-light submit" type="submit" value="Изпрати">
</div>
    <footer>
        <p>Copyright © 2020-2020 Компютърна лаборатория Джон Атанасов All Rights Reserved.</p>
    </footer>
</body>
</html>