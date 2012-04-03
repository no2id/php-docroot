<?php
require_once('../../inc/dbConn.php');
// Get newsletter corresponding to issue number sent
if ($_GET['issue']){
	$newsletter_q = "SELECT issue,DATE_FORMAT(release_date,'%e %M %Y') AS date_released, body FROM newsletter WHERE issue = {$_GET['issue']}";
} else {
	// get most recent newsletter
	$newsletter_q = "SELECT issue,DATE_FORMAT(release_date,'%e %M %Y') AS date_released, body FROM newsletter ORDER BY release_date DESC LIMIT 1";
}
$newsletter_r = mysql_query($newsletter_q) or die(mysql_error());
$newsletter = mysql_fetch_assoc($newsletter_r);

$page_title = "newsletter {$newsletter['issue']}";
require_once("../../inc/pageHead.php");?>
<h1>NO2ID News No. <?php echo $newsletter['issue']?></h1>
<p><em><?php echo $newsletter['date_released']?></em></p>
<?php echo $newsletter['body']?>
    <hr/>
    <p> Publication details: &copy; NO2ID <?php echo date('Y')?>  - This document may be freely redistributed 
      in one-to-one communications or physical copies as long as it is reproduced 
      in its entirety including this notice. It may not be mass-mailed without 
      the prior permission of NO2ID.<br />
      <a href="index.php">Newsletter Archive</a></p>
      

<?php require_once("inc/pageFooter.php");?>
