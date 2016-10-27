<?php
	function getAllNews($db){
		$stmt = $db->prepare('SELECT * FROM news');
		$stmt->execute();
		$result = $stmt->fetchAll();
		return $result;
	}
	function getNewsItem($db, $id){
		$stmt = $db->prepare('SELECT * FROM news WHERE id = ?');
		$stmt->execute($id);
		$result = $stmt->fetch();
		return $result;
	}
	function editNewsItem($db, $id, $title, $introduction, $fulltext){
		$stmt = $db->prepare('UPDATE news
							SET title = ?, introduction = ?, fulltext = ?
							WHERE id = ?');
		$stmt->execute(array($title, $introduction, $fulltext, $id));

	}
 ?>