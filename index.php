<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Спа-салон</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="css/style.css" rel="stylesheet">

 <?php
   /* обращение к файлу авторизации */
require __DIR__ . '/auth.php';
$login = getUserLogin();
?>
</head>
<body>
  <header>
  <div class="container-fluid">
    <div class="row hd">
      <div class="col-auto">
       <?php if ($login === null): ?>
        <!--  вход пользователя -->
       <a href="/login.php">Вход</a>
       <?php else: ?>
        <!-- личный кабинет -->
       Добро пожаловать, <h3><?= $login ?></h3>
       <?php 
        /* вычисление времени до конца скидки */
        $tim = date("H:i:s", mktime(24 - date('H'), 24*60 - date('i'), 24*3600 - date('s')));
       /* вычисление  скидки по ДР*/
        echo date("Сегодня d.m.y H:i"), $x;
        echo "<h1>До конца Вашей скидки на массаж осталось $tim </h1>"; 
        ?> 
        
  </div>
  <div class="row align-items-end p-3">
        <div class="col">
       <button type="button" class="btn btn-secondary">
       <!--  сброс сессии-->
       <a href="/logout.php" class="btn_log">Выйти</a>
       </button>
       </div></div>
       <?php endif; ?>
    </div>
    <!--  услуги-->
    <div class="row justify-content-center">
      <div class="col-md-auto p-2"><img src="images/im1.jpg"><br><br><button type="button" class="btn btn-secondary btn-sm">Заказать услугу</button></div>
      <div class="col-md-auto p-2"><img src="images/im2.jpg"><br><br><button type="button" class="btn btn-secondary btn-sm">Заказать услугу</button></div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-auto p-2"><img src="images/im3.jpg"><br><br><button type="button" class="btn btn-secondary btn-sm">Заказать услугу</button></div>
      <div class="col-md-auto p-2"><img src="images/im4.jpg"><br><br><button type="button" class="btn btn-secondary btn-sm">Заказать услугу</button></div>
    </div>
    <!-- футер-->
    <div class="row ft">
      <div class="col">	&#169; 2022</div>
    </div>
  </div>
  </header>
 </body>
</html>
