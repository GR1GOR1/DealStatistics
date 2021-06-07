<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добро пожаловать в конструктор скриптов!</title>
    <link href="GKS.css" rel="stylesheet" type="text/css">
</head>
<body class="MainClass">

<form action="index.php" target="_self">
    <button class="btn">Главная</button>
    </form>
<br>
    <?php

    //комментарий в php коде----------------------------------------------------------------
    /*еще один комментарий в php коде*/

    /*Устанавливаем соединение с БД */

    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $db_name = 'ArinaDB';
    $idArray = array();

    $link = mysqli_connect($host, $user, $password, $db_name);

    $query = "SELECT * FROM scriptstable";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    $query2 = "SELECT count(*) from information_schema.columns where table_name = 'scriptstable';";
    $result2 = mysqli_query($link, $query2) or die(mysqli_error($link));

    if ($result2){
        $col = mysqli_fetch_assoc($result2);
        $col = $col['count(*)'];
    }

    
    if($result)
    {
        $rows = mysqli_num_rows($result);
        echo "<table style='background: #C1A787;' border='1'><tr>
        <th style='width:10px;'>Id</th>
        <th style='width:150px;'>Наименование</th>
        <th style='width:200px;'>Текст</th>
        <th style='width:80px;'>Дата</th>
        <th style='width:80px;'>Выход</th>
        <th style='width:80px;'>Вход</th>
        <th style='width:80px;'>Блок</th>
        <th style='width:80px;'>Код</th>
        <th style='width:80px;'>Редактирование</th></tr>";

        for ($i = 0 ; $i < $rows; ++$i)
        {
            $row = mysqli_fetch_row($result);
            $idEdit = $row[0];
            echo "<tr>";
                for ($j = 0 ; $j < $col + 1; ++$j) {
                    if ($j == 2){
                        $STRT = nl2br($row[$j]);
                        echo "<td> $STRT </td> ";
                    } elseif ($j == $col) {
                        // ---------------------
                        echo "<td valign='middle' align='center'>
                        <form action='EditScript.php' method='post' target='_self'>
                        <br>
                        <button type='submit' name='id' value='$idEdit'>Изменить</button>
                        </form>
                        <form action='DelScript.php' method='post' target='_self'>  
                        <button type='submit' name='id' value='$idEdit'>Удалить</button>
                        </form>

                        </td>";
                        //----------------------
                        //echo "<td>$idEdit </td> ";
                    } else{
                        echo "<td>$row[$j] </td> ";    
                    }
                }
            echo "</tr>";
        }
        echo "</table>";
        
        // очищаем результат
        mysqli_free_result($result);

    }
    
    ?>
    <br>
    <form action="AddingManually.php" target="_self">
    <button class="btn">Добавить скрипт</button>
    </form>
</body>
