<?php
	include_once('database/connection.php');
	include_once('database/news.php');
	$result = getNewsItem($db, array($_GET['id']));
	include('templates/header.php');
	include('templates/news_item.php');
	include('templates/footer.php');
 ?>