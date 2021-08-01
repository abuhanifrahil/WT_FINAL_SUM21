<?php
include 'controllers/category_controllers.php';
$key = $_GET["key"];
$category = searchCategory($key);

if(count($category)>0){
	foreach ($category as $c){
		echo "<p>".$c["name"]."</p>";
	}
}
?>