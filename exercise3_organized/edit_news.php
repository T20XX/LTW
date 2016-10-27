<?php
	include_once('database/connection.php');
	include_once('database/news.php');
	$result = getNewsItem($db, array($_GET['id']));
	include('templates/header.php'); ?>
	<form action="action_edit_news.php" method="post">
		<input type="hidden" name="id" value='<?echo $_GET['id']?>'>
		<p><label>Title:
		<br>
			<input type="text" name="title" value='<?echo $result['title']?>' required="required">
		</label></p>
		<p><label>Introduction:
		<br>
				<textarea name="introduction" rows="10" cols="100"><?echo $result['introduction']?></textarea>
		</label></p>
		<p><label>Full text:
		<br>
				<textarea name="fulltext" rows="20" cols="100"><?echo $result['fulltext']?></textarea>
		</label></p>
		<input type="submit" value="Submit changes">
	</form>
	<?
	include('templates/footer.php');
 ?>
	