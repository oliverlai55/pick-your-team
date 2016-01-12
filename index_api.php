<?php

	include 'inc/db_connect.php';



	if($_GET){


		$query = "SELECT * FROM players WHERE name='".$_GET['name']."'";
		$result = mysql_query($query);

		$row = mysql_fetch_assoc($result);

		if($row){
			print json_encode($row);
		}else{
			print json_encode('error!');
		}

		exit;
	}

?>