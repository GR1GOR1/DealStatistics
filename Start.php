<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добро пожаловать!</title>
    <link href="GKS.css" rel="stylesheet" type="text/css">
</head>
<body class="MainClass">
<form action="index.php" target="_self">
   <button class="btn"> Главная</button>
  </form>
  <br>
<script>
    function viewbuttonS(){
        document.getElementById("buttonS").style.display = "block";
    };
</script>
<p>ТОЧКА ВХОДА</p>
<table height=70px BORDER="1" >
<tr  hight=50px width=50px>
<?php
//комментарий в php коде----------------------------------------------------------------
/*еще один комментарий в php коде*/
/*Устанавливаем соединение с БД */
$host = 'localhost';
$user = 'root';
$password = 'root';
$db_name = 'ArinaDB';

$link = mysqli_connect($host, $user, $password, $db_name);
$query = "SELECT nameS FROM scriptstable where code='1'";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

if($result)
    {
        $rows = mysqli_num_rows($result);
         for ($i = 0 ; $i < $rows ; ++$i)
        {
            $row = mysqli_fetch_row($result);
                 echo "<td><form  method='POST' ><input class='btn' type='submit' name='id' value='$row[0]'></form></td>";
            
        }
       
    }
?>
</tr>
<!------------------------------------------------------------------------------------------------------->
</table>
<br>
<table BORDER="1">
<tr>
<td>ОТВЕТ</td>
<td>ТЕКСТ</td>
</tr>
<tr>
<td valign="top"  align="center" height=300px width="300px">
<br>
    <?php
    $IDArray = array();
    
    $id2=$_POST['id'];
    //echo $id2;
    
    if($id2){
    $query2 = "SELECT idNext FROM scriptstable where nameS = '$id2'";
    
    $result2 = mysqli_query($link, $query2) or die(mysqli_error($link));

    $rows2 = mysqli_num_rows($result2);
    $STR = mysqli_fetch_assoc($result2);
    $STR = $STR['idNext'];
}
    $IDArray = explode(',',$STR);
    for ($i = 0; $i < count($IDArray); ++$i){
        $query3 = "SELECT nameS FROM scriptstable where id = '$IDArray[$i]'";
        $result3 = mysqli_query($link, $query3) or die(mysqli_error($link));
    
        if($result3)
        {
            $rows3 = mysqli_num_rows($result3);
             for ($k = 0 ; $k < $rows3 ; ++$k)
            {
                $row3 = mysqli_fetch_row($result3);
              
                    for ($j = 0 ; $j < 1 ; ++$j) echo "<form method='POST' >
                    <input class='btn' type='submit' name='id' value='$row3[$j]'>
                    </form>";
                
            }
           
        }
    }
    
    ?>
</td>
<!------------------------------------------------------------------------------------------------------->

<td valign="top" height=300px width=300px>
<?php
$id2=$_POST['id'];
if($id2){
    $query2 = "SELECT textS FROM scriptstable where nameS = '$id2'";
    
    $result2 = mysqli_query($link, $query2) or die(mysqli_error($link));

    $rows2 = mysqli_num_rows($result2);
    $STRT = mysqli_fetch_assoc($result2);
    $STRT = $STRT['textS'];
    $STRT = nl2br($STRT);
    for ($i = 0 ; $i < $rows2 ; ++$i)
    {
        $row2 = mysqli_fetch_row($result2);
        
            for ($j = 0 ; $j < 1 ; ++$j) echo $STRT;
        
    }
} 
?>
</td>
</tr>
</table>
</body>