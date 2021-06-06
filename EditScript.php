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
    echo "Отредактируйте необходимые поля <br/>";
?>


<?php


    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $db_name = 'ArinaDB';

    $link = mysqli_connect($host, $user, $password, $db_name);
    $id=$_POST['id'];
    $query = "SELECT * FROM scriptstable WHERE id = '$id' ";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    
    $query2 = "SELECT count(*) from information_schema.columns where table_name = 'scriptstable';";
    $result2 = mysqli_query($link, $query2) or die(mysqli_error($link));

    if ($result2){
        $col = mysqli_fetch_assoc($result2);
        $col = $col['count(*)'];
    }

    $ScriptsContetns = array();
    $row = mysqli_fetch_row($result);
    for ($i = 0; $i < $col; ++$i){
        $ScriptsContetns[$i] = $row[$i];
    }
?>

<?php

$dateS = $ScriptsContetns[3];

echo "<form action='EndEditScript.php' method='post' enctype='multipart/form-data'>
<table border='1'>

<td>
    <table>
    <tr>
    <tr>
        <td > Id скрипта</td><td><input type='text' name='id' value='$ScriptsContetns[0]' /></td>
    </tr>
    <tr>
        <td > Наименование скрипта</td><td><input type='text' name='name' value='$ScriptsContetns[1]'/></td>
    </tr>
    <tr>
        <td > Дата введения скрипта</td><td><input type='date' name='date' value='$dateS'/></td>
    </tr>
    <tr>
        <td > id последующих скриптов</td><td><input type='text' name='idNext' value='$ScriptsContetns[4]'/></td>
    </tr>
    <tr>
        <td > id предыдущих скриптов</td><td><input type='text' name='idBefore' value='$ScriptsContetns[5]'/></td>
    </tr>
    <tr>
        <td > id блока, к которому будет принадлежть скрипт</td><td><input type='text' name='idBlock' value='$ScriptsContetns[6]'/></td>
    </tr>
    <tr>
        <td > Код блока</td><td><input type='text' name='code' value='$ScriptsContetns[7]'/></td>
    </tr>
    </table>
</td>

<td>
    <table>
    <tr>
        <td > Текст скрипта</td>
    </tr>
    <tr>
        <td height=200px ><textarea style='width:400px;height:200px;' type='text' name='text' >$ScriptsContetns[2]</textarea></td>
    </tr>
    </table>
</td>

</tr>
</table>

<br>
    <input class='btn' type='submit' value='Внести скрипт в БД' />
</form>"

?>

</body>
