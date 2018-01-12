<?php

	include("setting.php");
	
	$id = $_POST["id"];
	
	$qry = mysql_query("SELECT * FROM ilceler WHERE kategori='$id'");
		while($w=mysql_fetch_assoc($qry)){
			echo "<option id='".$w["id"]."'>".$w["ilce"]."</option>";
		}
	
	