<?php
// Change this for the title - all titles start with "No2ID -" 
$page_title = "past events";
// add ../ before inc if page is within a directory - only need to do this on top include
require_once("../inc/pageHead.php");
?>
<!-- Put your page in here -->
<h1>Previous Events - <a href="events.php">upcoming events</a></h1>
<?php
require_once('../inc/dbConn.php');
// get events that haven't expired and list them with most recent first
$full_event_sql = "SELECT id,title,DATE_FORMAT(date_start,'%a, %D %b %Y') AS form_date,body FROM event WHERE date_end < NOW() ORDER BY date_start DESC";
$full_event_q = mysql_query($full_event_sql) or die(mysql_error() . $full_event_sql);
while ($full_event = mysql_fetch_assoc($full_event_q)) {
    echo "<h2><a name=\"{$full_event['id']}\"></a>{$full_event['form_date']} &#8212; {$full_event['title']}</h2>\n";
    echo "eventID:{$full_event['id']}\n";
    echo "{$full_event['body']}\n";
		echo '<hr/>';
}
?>
<!-- don't change anything after this -->
<?php require_once("../inc/pageFooter.php");?>
