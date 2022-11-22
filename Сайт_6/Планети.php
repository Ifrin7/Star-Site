<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Зоряна мапа</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div style="text-align: center">
    <h1> Планети Сонячної Системи </h1>
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
      Сонце складає ≈99,85 % маси Сонячної системи; газові планети-гіганти (Юпітер, Сатурн, Уран і Нептун) складають 99 % залишкової маси. Як і в інших зір, у надрах Сонця ефективно відбуваються термоядерні реакції з виділенням енергії. Планети за фізичними характеристиками поділяють на дві групи. Ближче до Сонця розташовані планети земної групи: Меркурій, Венера, Земля, Марс; далі від Сонця розташувались планети-гіганти: Юпітер, Сатурн, Уран, Нептун. Планети земної групи порівняно невеликі, їхня густина ≈5 г/см³; вони складаються переважно з важких хімічних елементів; мають гаряче металеве ядро, оточене мантією із силікатних порід, і верхній шар — кору. Планети-гіганти не мають твердої поверхні, бо за хімічним складом (99 % гідрогену і гелію) і густиною (≈1 г/см³) вони нагадують зорі, а їхня велика маса спричиняє нагрівання ядер до температури понад +10 000 °С


      <br>
      <br>

      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/72/Solar_system_scale.jpg/650px-Solar_system_scale.jpg" width="600">

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
	$file_name = "Планети.txt";
	include 'write_file.php';
	?>
	
	<?php include 'read_file.php';?>
	
  </div>
  
</body>
</html>
