<?php

$db = mysqli_connect('localhost', 'root', '', 'newsday');

if($db){
	// echo('database connection okay');
}else{
	die('database connection eror'.mysqli_eror($db));
}





 ?>