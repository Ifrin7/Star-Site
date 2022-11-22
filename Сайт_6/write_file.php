<?php
	              
	if(isset($_POST['comment']))
	{
		$name=$_POST['name'];
		$comment=$_POST['comment'];
		
		$fp = fopen($file_name, 'a');
	
		fwrite($fp, $name." пише: ".$comment."\n");
		fclose($fp);
	}
	?>