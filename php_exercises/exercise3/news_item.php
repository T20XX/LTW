<?php
	$db = new PDO('sqlite:news.db');
	$stmt = $db->prepare('SELECT * FROM news WHERE id = ?');
	$stmt->execute(array($_GET['id']));
	$result = $stmt->fetch();
	foreach( $result as $row) {
		echo '<h1>' . $row['title'] . '</h1>';
		echo '<p>' . $row['introduction'] . '</p>';
	}
 ?>