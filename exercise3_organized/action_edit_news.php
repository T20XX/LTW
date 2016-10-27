<?php
	include_once('database/connection.php');
	include_once('database/news.php');
	editNewsItem($db, $_POST['id'],$_POST['title'],$_POST['introduction'],$_POST['fulltext']);

	header('Location: news_item.php?id=' . $_POST['id']);
	exit();
?>