<?php

	include "controller/controller.php";

	$main = new controller();

	if(isset($_GET['e'])){
		$nim = $_GET['e'];
		$main->viewEdit($nim);
	}else if(isset($_GET['d'])){
		$nim = $_GET['d'];
		$main->delete($nim);
	}else if(isset($_GET['i'])){
		$main->viewInsert($nim);
	}else{	
		$main->index();
	}
?>