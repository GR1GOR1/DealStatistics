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
   <button class="btn">Редактирование</button>
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

    $textOUT = nl2br($text);
//вывод на экран
    echo "Скрипт отредактирован со следующими данными: <br/>";
    echo "ID: " .$id;  
    echo "<br/> Наименование: " .$name;
    echo "<br/> Дата: " .$date;
    echo "<br/> Текст: <br/>" .$textOUT;
?>


<?php


    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $db_name = 'ArinaDB';

    $link = mysqli_connect($host, $user, $password, $db_name);

    $query = "DELETE FROM scriptstable WHERE id = '$id' ";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    $query2 = "INSERT INTO scriptstable VALUES ('$id', '$name', '$text', '$date', '$idNext','$idBefore','$idBlock','$code')";
    $result2 = mysqli_query($link, $query2) or die(mysqli_error($link));


?>

</body>