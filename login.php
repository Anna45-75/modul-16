<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Спа-салон</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="css/style.css" rel="stylesheet">
  <?php
if (!empty($_POST)) {
    /* подключение файла с массивом кук */
    require __DIR__ . '/auth.php';

    $login = $_POST['login'];
    $password = $_POST['password'];
    $date = $_POST['date'];

  /* верификация хэш */
    $hash = password_hash($passwod, PASSWORD_DEFAULT);
    if (password_verify($password, $hash)) {
        true;
    }
    else {
        false;
    }
 /* Проверка кук */
    if (checkPassword($login, $password,$date)) {
        setcookie('login', $login, 0, '/');
        setcookie('password', $password, 0, '/');
        setcookie('date', $date, 0, '/');
        header('Location: /index.php');
    } else {
        $error = 'Ошибка авторизации';
    }
};
/* Функция проверки ДР */
function aDate(){
$born = strtotime($date);
$now = time();
$next_birthday = mktime(0, 0, 0, date('m',$born), date('d',$born), date('Y'));

if ($next_birthday > $now && $next_birthday < strtotime('+5 day')) {
$x = 1;
} else {
$x = 0;
}
echo 'У Вас праздничная скидка!';
}
?>

</head>
<body>
  <header>
  <div class="container-fluid">
    <div class="row hd">
  </div>
    <?php if (isset($error)): ?>
<span style="color: red;">
    <?= $error ?>
</span>
<?php endif; ?>
<div class="row justify-content-center p-3">
    <div class="col-md-4">
<!-- Форма входа -->
<form action="login.php" method="post">
<div class="mb-3">
    <label for="login" class="form-label">Имя пользователя: </label><input type="text" name="login" id="login" placeholder="Введите имя" class="form-control">
</div>
<div class="mb-3">
    <label for="password" class="form-label">Пароль: </label><input type="password" name="password" id="password"  placeholder="Введите пароль"  class="form-control">
</div>
<div class="mb-3">
    <label for="date" class="form-label">Дата рождения: </label><input type="date" required name="date" class="form-control">
</div>
<div class="row p-1">
    <div class="col-auto"><input type="submit" value="Войти"  class="btn btn-secondary"></div>
</div>
</form>
    </div>
</div>
    <div class="row ft">
      <div class="col">	&#169; 2022</div>
    </div>
  </div>
  </header>
 </body>
</html>
