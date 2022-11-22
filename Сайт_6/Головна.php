<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Зоряна мапа</title>
  <script type="text/javascript" src="script.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div style="text-align: center">
    <h1> Сонячна система </h1>
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



    <div style="flex-grow: 3;">
      <h3 class="about_system"> В сонячній системі є Сонце та дев'ять планет: </h3>
      
      
      <?php include 'show_time.php';?>
      <br>

      <button onclick="HideText();">Hide text</button>

      <ul id = "text"; class="list">
        <li>Меркурій</li>
        <li>Венера</li>
        <li>Земля</li>
        <li>Марс</li>
        <li>Юпітер</li>
        <li>Сатурн</li>
        <li>Уран</li>
        <li>Нептун</li>
      </ul>

      <table border="1">
        <thead>
          <tr>
            <th>Назва</th>
            <th>Діаметр в КМ</th>
          </tr>

        </thead>
        <tbody>
          <tr>
            <td>Меркурій</td>
            <td>4 879,4</td>
          </tr>

          <tr>
            <td>Венера</td>
            <td>12 103,6</td>
          </tr>

          <tr>
            <td>Земля</td>
            <td>12 742</td>
          </tr>

          <tr>
            <td>Марс</td>
            <td>6780,0</td>
          </tr>

          <tr>
            <td>Юпітер</td>
            <td>139 822</td>
          </tr>

          <tr>
            <td>Сатурн</td>
            <td>116 464</td>
          </tr>

          <tr>
            <td>Уран</td>
            <td>50 724</td>
          </tr>

          <tr>
            <td>Нептун</td>
            <td>49 244</td>
          </tr>

        </tbody>
      </table>
      <br>

      <img src="https://i.ytimg.com/vi/AY77uRj6Q7U/maxresdefault.jpg" width="600">

      <br>
      <br>

      <iframe width="560" height="315" src="https://www.youtube.com/embed/3m1WlU6SAYw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>

  <div style="text-align: center" class="about_me">
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
	$file_name = "Головна.txt";
	include 'write_file.php';
	?>
	
	<?php include 'read_file.php';?>
	
  </div>
</body>
</html>
