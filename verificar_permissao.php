<?php
	if(!isset($_SESSION["tipo"]) || $_SESSION["tipo"] != "ADM")
	{
		header("location:index.php");
	}
?>