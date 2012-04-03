<?php
// get four pledges from the database
require_once('inc/dbConn.php');
$sql = "SELECT photo,name, RAND() FROM pledger WHERE display = '1' ORDER BY RAND() LIMIT 3";
$pledger_r = mysql_query($sql) or die('Connect failed');
echo '<div style="width:400px;height:89px;margin:0;padding:0;border:black solid 1px;">';
while ($pledger = mysql_fetch_assoc($pledger_r)){
	$photo = $pledger['photo'];
	$name = htmlentities($pledger['name']);
	echo "<img src=\"/bannerPic.php?image=$photo&amp;maxHeight=89\" alt=\"$name\" style=\"float:left;\" />";
}
?>
	<div style="text-align:center;font-family:Verdana, Arial, Helvetica, sans-serif;">
		<p style="font:size:10px;font-weight:bold;">Who's saying NO?</p>
		<p><a href="/pledgomatic.php">Join them</a></p>
	</div>
</div>
