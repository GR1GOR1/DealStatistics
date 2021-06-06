<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добро пожаловать!</title>
    <link href="GKS.css" rel="stylesheet" type="text/css">
</head>
<body class="MainClass">

<p>Добавление скрипта вручную</p>

<form action="index.php" target="_self">
   <button class="btn">Главная</button>
  </form>
  <br>
    <form action="AddScript.php" method="post" enctype="multipart/form-data">
    <table border="1">
    
    <td>
        <table>
        <tr>
        <tr>
            <td > id скрипта</td><td><input type="text" name="id" /></td>
        </tr>
        <tr>
            <td > наименование скрипта</td><td><input type="text" name="name" /></td>
        </tr>
        <tr>
            <td > дату введения скрипта</td><td><input type="date" style="width: 165px;" name="date" /></td>
        </tr>
        <tr>
            <td > id последующих скриптов</td><td><input type="text" name="idNext" /></td>
        </tr>
        <tr>
            <td > id предыдущих скриптов</td><td><input type="text" name="idBefore" /></td>
        </tr>
        <tr>
            <td > id блока, к которому будет принадлежть скрипт</td><td><input type="text" name="idBlock" /></td>
        </tr>
        <tr>
            <td > Код блока</td><td><input type="text" name="code" /></td>
        </tr>
        </table>
    </td>
    
    <td>
        <table>
        <tr>
            <td > Введите текст скрипта</td>
        </tr>
        <tr>
            <td height=200px ><textarea style="width:400px;height:200px;" type="text" name="text"></textarea></td>
        </tr>
        </table>
    </td>
    
    </tr>
    </table>

    <br>
        <input class="btn" type="submit" value="Внести скрипт в БД" />
    </form>


    <br> <br> <br>


    <form action="DelScript.php" method="post" enctype="multipart/form-data">
    <table>
    <tr>
        <td > id скрипта для удалния</td><td><input type="text" name="id" /></td>
    </tr>
    
    </table>
    <br>
        <input class="btn" type="submit" value="удалить скрипт из БД" />
    </form>


    <br> <br> <br>


    <form action="EditScript.php" method="post" enctype="multipart/form-data">
    <table>
    <tr>
        <td > id скрипта для редактирования</td><td><input type="text" name="id" /></td>
    </tr>
    
    </table>
    <br>
        <input class="btn" type="submit" value="Редактировать скрипт" />
    </form>

</body>