<?php 
	require_once "../models/Category.php";
	$category = new Category;
	if(isset($_POST['action']) == "new") {
		if(isset($_POST['cat_name'])) {
			echo $category -> save_category($_POST['cat_name']);
		}
	} else if(isset($_GET['action']) == "all") {
		echo json_encode($category -> all());
	}

	

 ?>