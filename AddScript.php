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
    $idNext=$_POST['idNext'];
    $idBefore=$_POST['idBefore'];
    $idBlock=$_POST['idBlock'];
    $code=$_POST['code'];

//вывод на экран
    echo "Скрипт введен со следующими данными: <br/>";
    echo "ID: " .$id;  
    echo "<br/> Наименование: " .$name;
    echo "<br/> Дата: " .$date;
    echo "<br/> Текст: <br/>" .$text;
?>


<?php


    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $db_name = 'ArinaDB';

    $link = mysqli_connect($host, $user, $password, $db_name);

    $query = "INSERT INTO scriptstable VALUES ('$id', '$name', '$text', '$date', '$idNext','$idBefore','$idBlock','$code')";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));


?>

</body>