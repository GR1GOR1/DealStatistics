<!-- комментарий в html коде -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добро пожаловать!</title>
    <link href="GKS.css" rel="stylesheet" type="text/css">
</head>

<body class="MainClass">
<div class="txtindex">
<H3>ДОБРО ПОЖАЛОВАТЬ В КОНСТРУКТОР СКРИПТОВ! РАДЫ ВАС ВИДЕТЬ!</H3>
<br><br>
<!-- Реализовать в будущих проектах -->
<!--<p>Дерево скриптов</p>  
<form action="Tree.php" target="_self">
   <button>Список скриптов</button>
</form>
<br><br>-->
<!--<p>Тут Вы можете добавить, удалить или отредактировать скрипт</p>-->
<form action="AddingManually.php" target="_self">
   <button class="btn">Редактирование</button>
  </form>
  <br><br><br><br>
<!--<p>Здесь Вы увидеть весь список скриптов</p>-->  
<form action="AllScripts.php" target="_self">
   <button class="btn">Список скриптов</button>
</form>
<br><br><br><br>
<!--<p>Если Вы уже готовы приступить к работе!<p>-->
<form  action="Start.php" target="_self">
   <button class="btn">Запустить сценарий</button>
</form>
</div>
</body>

</html>

