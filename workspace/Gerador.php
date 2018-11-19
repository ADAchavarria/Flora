<?php
// include QR_BarCode class 
include "QR_BarCode.php";
include "index.html";

if (@$_GET['search']) {

	$api_url = "https://pt.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&titles=".ucwords($_GET['search'])."&redirects=true";
	$api_url= str_replace(' ', '%20', $api_url);

	if ($data = json_decode(@file_get_contents($api_url))) {
		foreach ($data->query->pages as $key => $val) {
				$pageId = $key;
				break;
		}

		$content = $data->query->pages->$pageId->extract;
		
		header('Content-Type:text/html; charset=utf-8');
		echo ("<h1> olá álvaro e Ricardo </h1>");
		echo $content;


		
		
	}
	else{
		echo 'No result found...';
	}

	
}


?>