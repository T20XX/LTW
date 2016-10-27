<?
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
		echo '<li><a href="edit_news.php?id=' . $counterID . '">edit</a></li>';
		echo '</ul>';
		echo '</div>';
		$counterID++;
	}
?>