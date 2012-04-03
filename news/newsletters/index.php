<?php
$page_title = "news";
require_once("../../inc/pageHead.php");?>
<h1>NO2ID Newsletters</h1>
<p>Archive of newsletters, including most recent</p>
<ul>
	<?php
	require_once('inc/dbConn.php');
	// get list if newsletters
	$newsletter_q = "SELECT issue,DATE_FORMAT(release_date,'%e %M %Y') AS date_released FROM newsletter ORDER BY release_date DESC";
	$newsletter_r = mysql_query($newsletter_q) or die(mysql_error());
	while ($newsletter = mysql_fetch_assoc($newsletter_r)){
		echo "<li><a href=\"newsletter.php?issue={$newsletter['issue']}\">Issue <strong>{$newsletter['issue']}</strong>, {$newsletter['date_released']}</a></li>";
	}
	?>
</ul>	
<p><a href="rss.php">Newsletter RSS Feed</a></p>
<?php require_once("inc/pageFooter.php");?>
