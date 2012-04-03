<?php

require_once('../../inc/dbConn.php');

// Get newsletter corresponding to issue number sent

if ($_GET['name']){

	$_GET['name'] = rawurldecode($_GET['name']);

	$release_q = "SELECT title,DATE_FORMAT(release_date,'%e %M %Y') AS date_released, body FROM press_release WHERE short_name = '{$_GET['name']}'";

} else {

	// get most recent newsletter

	$release_q = "SELECT title,DATE_FORMAT(release_date,'%e %M %Y') AS date_released, body FROM press_release WHERE release_date <= NOW() ORDER BY release_date DESC LIMIT 1";

}

$release_r = mysql_query($release_q) or die(mysql_error());

$release = mysql_fetch_assoc($release_r);



$release['title'] = htmlspecialchars($release['title']);

$page_title = "Press Release {$release['title']}";

require_once("../../inc/pageHead.php");?>

<h1><?php echo $release['title']?></h1>

<p><em><?php echo $release['date_released']?></em></p>

<?php echo $release['body']?>

<br><p><a href="index.php">Back to all press releases</a></p>

<?php require_once("inc/pageFooter.php");?>

