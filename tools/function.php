<?php

function dd($arr){
	echo "<pre>";
	var_dump($arr);
	echo "</pre>";
	die();
}
function dump($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}
