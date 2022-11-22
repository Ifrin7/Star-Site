<big>
	<?php
	  $file = fopen($file_name, "r");
	  
	  while(!feof($file)) {
	        $line = fgets($file);
	        echo $line."<br>"; # do same stuff with the $line
	    }
	    fclose($file);
	
	?>
</big>