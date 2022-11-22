<!DOCTYPE html>
<html>
	<head>
	  <title>Store form data in .txt file</title>
	</head>
	<body>
	    <form method="post">
		    Ім'я користувача:<br>
		    <input type="text" name="name"><br>
		    Коментар:<br>
		    <input type="text" name="comment"><br>
		    <input type="submit" name="submit">
	  	</form>
	  	<br>
	
		<?php
		              
		if(isset($_POST['comment']))
		{
			$name=$_POST['name'];
			$comment=$_POST['comment'];
			
			$fp = fopen('info.txt', 'a');
		
			fwrite($fp, $name.",".$comment."\n");
			fclose($fp);
		}
		?>
	
		<big>
		<?php
		  $file = fopen("info.txt", "r");
		  
		  while(!feof($file)) {
		        $line = fgets($file);
		        echo $line."<br>"; # do same stuff with the $line
		    }
		    fclose($file);
		
		?>
		</big>
	  
	</body>
</html>




