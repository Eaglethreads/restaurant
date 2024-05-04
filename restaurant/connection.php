<?php

		$SERVER='localhost';
		$username='root';
		$password='';
		$dbname='reservation';
		$conn = mysqli_connect('localhoat','root','','reservation');
		if($conn){
			echo"successful";
		}
		else{
			mysqli_error($conn);
			
		}mysqli_close($conn)
		?>
	