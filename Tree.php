<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
ul, #myUL {
  list-style-type: none;
}

#myUL {
  margin: 0;
  padding: 0;
}

.caret {
  cursor: pointer;
  -webkit-user-select: none; /* Safari 3.1+ */
  -moz-user-select: none; /* Firefox 2+ */
  -ms-user-select: none; /* IE 10+ */
  user-select: none;
}

.caret::before {
  content: "\25B6";
  color: black;
  display: inline-block;
  margin-right: 6px;
}

.caret-down::before {
  -ms-transform: rotate(90deg); /* IE 9 */
  -webkit-transform: rotate(90deg); /* Safari */
  transform: rotate(90deg);  
}

.nested {
  display: none;
}

.active {
  display: block;
}
</style>
</head>
<body>
<form action="index.php" target="_self">
   <button>Главная</button>
  </form>
  <br>
<h1>Древовидное представление со стрелкой</h1>

<p>Дерево представляет собой иерархическое представление информации, где каждый элемент может иметь несколько подэлементов.</p>
<p>Нажмите на стрелку(и), чтобы открыть или закрыть ветви дерева.</p>

<?php
//=================PHP========================
$host = 'localhost';
$user = 'root';
$password = 'root';
$db_name = 'ArinaDB';


$ANext = array();

$ABefore = array();

$ABlock = array();


$link = mysqli_connect($host, $user, $password, $db_name);

$query = "SELECT * FROM testtable";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

if($resault)
    {
        $rows = mysqli_num_rows($resault);
//        echo ""
    }

if($result)
    {
        $rows = mysqli_num_rows($result);
        echo "<table class='txtclrW'><tr><th style='width:10px;'>Id</th><th style='width:150px;'>Наименование</th><th style='width:300px;' >Текст</th><th style='width:100px;'>Дата</th></tr>";

        for ($i = 0 ; $i < $rows ; ++$i)
        {
            $row = mysqli_fetch_row($result);
            echo "<tr>";
                for ($j = 0 ; $j < 4 ; ++$j) {
                    echo "<td>$row[$j] </td> ";
                }
            echo "</tr>";
        }
        echo "</table>";
        
        // очищаем результат
        mysqli_free_result($result);

    }
//============================================
?>
<ul id="myUL">

</ul>

<ul id="myUL">
  <li><span class="caret">Напитки</span>
    <ul class="nested">
      <li>Вода</li>
      <li><span class="caret">Чай</span>
      <ul class="nested">
          <li>Черный чай</li>
          <li>Белый чай</li>
          <li><span class="caret">Зеленый чай</span>
            <ul class="nested">
              <li>Сенча</li>
              <li>Гекуро</li>
              <li>Маття</li>
              <li>Пи Ло Чун</li>
            </ul>
          </li>
        </ul>
      </li> 
      <li><span class="caret">Чай</span>
        <ul class="nested">
          <li>Черный чай</li>
          <li>Белый чай</li>
          <li><span class="caret">Зеленый чай</span>
            <ul class="nested">
              <li>Сенча</li>
              <li>Гекуро</li>
              <li>Маття</li>
              <li>Пи Ло Чун</li>
            </ul>
          </li>
        </ul>
      </li>  
    </ul>
  </li>
</ul>

<script>
var toggler = document.getElementsByClassName("caret");
var i;

for (i = 0; i < toggler.length; i++) {
  toggler[i].addEventListener("click", function() {
    this.parentElement.querySelector(".nested").classList.toggle("active");
    this.classList.toggle("caret-down");
  });
}
</script>

</body>
</html>

