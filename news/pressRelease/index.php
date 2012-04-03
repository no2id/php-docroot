<?php
$page_title = "press releases";
require_once("../../inc/pageHead.php");?>
<h1>NO2ID Press Releases</h1>
<p>Archive of press releases, including the most recent.</p>
<p>Media enquiries should be sent to <a href="mailto:press&#x40;no2id.net">press&#x40;no2id.net</a>.</p>
<ul>
	<?php
	require_once('inc/dbConn.php');
	// get list if newsletters
	$release_q = "SELECT short_name,title,DATE_FORMAT(release_date,'%e %M %Y') AS date_released FROM press_release WHERE release_date <= now() ORDER BY release_date DESC, id DESC";
	$release_r = mysql_query($release_q) or die(mysql_error());
	while ($release = mysql_fetch_assoc($release_r)){
		$release['title'] = htmlentities($release['title']);
		echo "<li><a href=\"release.php?name={$release['short_name']}\">{$release['title']}</a>, {$release['date_released']}</li>";
	}
	?>
</ul>
<p><a href="rss.php">Press Release RSS Feed</a></p>
<?php require_once("inc/pageFooter.php");?>
