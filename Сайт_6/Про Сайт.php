<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Зоряна мапа</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div style="text-align: center">
    <h1> Про Сайт </h1>
  </div>

  <div style="display: flex;">
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

    <div style="flex-grow: 3;" class="about_site">
      <h3> Цей сайт буде постійно оновлюватися. Поки що на ньому є чотири наповнені сторінки та блок навігації. А також є CSS. </h3>

      <br>
      <br>

      <img src="https://media.sciencephoto.com/a9/00/01/46/a9000146-800px-wm.jpg" width="600">

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
	$file_name = "Про_сайт.txt";
	include 'write_file.php';
	?>
	
	<?php include 'read_file.php';?>
	
  </div>
  
</body>
</html>
