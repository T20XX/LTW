<!DOCTYPE html>
<html>
	<head>
		<title>News</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style1.css">
	</head>
	<body>
		<div id="header">
			<h1>Online Newspaper</h1>
			<h2>CSS Exercise</h2>
		</div>
		<div id="menu">
			<ul>
				<li><a href="">Politics</a></li>
				<li><a href="">Sports</a></li>
				<li><a href="">World</a></li>
				<li><a href="">Education</a></li>
				<li><a href="">Society</a></li>
			</ul>
		</div>
		<div id="content">
			<?php
				$db = new PDO('sqlite:news.db');
				$stmt = $db->prepare('SELECT * FROM news');
				$stmt->execute();
				$result = $stmt->fetchAll();
				$counterID = 1;
				foreach( $result as $row) {
					echo '<div class="news-item">';
					echo '<h3>' . $row['title'] . '</h3>';
					echo '<img src="http://ipsumimage.appspot.com/300x200,ff7700" alt="300x200">';
					echo '<p class="introduction">' . $row['introduction'] . '</p>';
					echo '<ul>';
					echo '<li><a href="news_item.php?id=' . $counterID . '">see more</a></li>';
					echo '<li><a href="comentarios' . $counterID . '.html">comments (2)</a></li>';
					echo '<li><a href="partilhar' . $counterID . '.html">share</a></li>';
					echo '</ul>';
					echo '</div>';
					$counterID++;
				}
			?>
		</div>
		<div id="footer">
			<p>CSS Exercises @ FEUP - 2013</p>
		</div>
	</body>
</html>