<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Зоряна мапа</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div style="text-align: center">
    <h1> Сонце </h1>
  </div>

  <div style="display: flex;">
    <!-- Розподіл на три колонки -->
    <div style="flex-grow: 1; padding-right: 10%; min-width:25%">
      <nav>
        <ul class="horizontalList">
          <li class="horizontalList"><a href="Головна.php">На головну</a></li>
          <li class="horizontalList"><a href="Планети.php">Планети</a></li>
          <li class="horizontalList"><a href="Сонце.php">Сонце</a></li>
          <li class="horizontalList"><a href="Про Сайт.php">Про сайт</a></li>
        </ul>
      </nav>
    </div>
    <div style="flex-grow: 3;">

      Сонце — типова зоря головної послідовності спектрального класу G2. Воно майже ідеально сферичне і являє собою гарячу плазму, сплетену магнітними полями. За діаметру приблизно 1.3 млн км, що в 109 разів більше, ніж земний, має масу близько 2 × 1030 кг, що більше земної приблизно в 330 000 разів. Джерелом енергії Сонця є термоядерні реакції в його ядрі. Земля та сім інших планет обертаються навколо Сонця. Крім них, навколо Сонця обертаються комети, астероїди, метеороіди, космічний пил та інші дрібні об'єкти. Маса Сонця становить 99,866 % від загальної маси всієї Сонячної системи. Сонячне випромінювання підтримує життя на Землі (фотони необхідні для початкових стадій процесу фотосинтезу) та визначає клімат нашої планети.

      <br>
      <br>

      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Sun_poster_uk.svg/400px-Sun_poster_uk.svg.png" width="600">

      <br>
      <br>
      
      <?php include 'show_time.php';?>
      <br>

    </div>
  </div>

  <div style="text-align: center">
    <h3>Розроблено студентом Лосєв А. А. (2КН-22Б)</h3>
  </div>

  <div style="text-align: center">
  
	  <form method="post">
	    Ім'я користувача:<br>
	    <input type="text" name="name"><br>
	    Коментар:<br>
	    <input type="text" name="comment"><br>
	    <input type="submit" name="submit">
	  </form>
	  <br>
	
	<?php 
	$file_name = "Сонце.txt";
	include 'write_file.php';
	?>
	
	<?php include 'read_file.php';?>
	
  </div>
  
</body>
</html>
