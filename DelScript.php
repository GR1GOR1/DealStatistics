<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добро пожаловать!</title>
    <link href="GKS.css" rel="stylesheet" type="text/css">
</head>

<body class="MainClass">

<form action="index.php" target="_self">
   <button class="btn">Главная</button>
  </form>
  <br>
  <form action="AddingManually.php" target="_self">
   <button class="btn">Назад</button>
  </form>
  <br>
<?php
    $id=$_POST['id'];
    $name=$_POST['name'];
    $text=$_POST['text'];
    $date=$_POST['date'];

//вывод на экран
    echo "Скрипт успешно удален! <br/>";
?>


<?php


    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $db_name = 'ArinaDB';

    $link = mysqli_connect($host, $user, $password, $db_name);

    $query = "DELETE FROM scriptstable WHERE id = '$id' ";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));


?>

</body>
