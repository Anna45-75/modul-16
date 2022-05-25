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
    require __DIR__ . '/auth.php';

    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    if (checkPassword($login, $password, $hashed_password)) {
        setcookie('login', $login, 0, '/');
        setcookie('password', $password, 0, '/');
        setcookie($hashed_password , 0, '/');
        header('Location: /index.php');
    } else {
        $error = 'Ошибка авторизации';
    }
}
var_dump($hashed_password);
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
<form action="login.php" method="post">
<div class="mb-3">
    <label for="login" class="form-label">Имя пользователя: </label><input type="text" name="login" id="login" class="form-control">
</div>
<div class="mb-3">
    <label for="password" class="form-label">Пароль: </label><input type="password" name="password" id="password" class="form-control">
</div>
    <input type="submit" value="Войти"  class="btn btn-primary">
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