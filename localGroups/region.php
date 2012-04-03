<?php

header("Location: /localgroups/");
exit();

require_once('../inc/config.php');

$page_title = 'local groups';
$body_extra = 'onload="showMap();" onunload="GUnload()"'; // onload stuff for google maps
// Need to include Google Maps javascript in the head.
$scripts = "<script src=\"http://maps.google.com/maps?file=api&amp;v=2&amp;key="
                . htmlspecialchars(CONFIG_GOOGLE_MAPS_API_KEY)
                . "\" type=\"text/javascript\"></script>";
require_once('../inc/pageHead.php');
require_once('../inc/dbConn.php');?>

<!-- Put your page in here -->

<h1>NO2ID Local Groups</h1>

<p>Opposition to identity cards exists all around the UK. Groups of
people have come together locally under the NO2ID banner to campaign
against this dangerous legislation.  To get more involved, please
contact your nearest group.  If there isn't one near you, consider
starting one!  For more information on this please <a
href="mailto:local.groups&#x40;no2id.net">contact us</a>.</p>

<p><a href="/resources/motions/index.php">Councils and public bodies
across the UK have passed motions against ID cards.</a> A number of
NO2ID local groups have successfully lobbied local councillors and
union representatives to get them to do this.</p>

<p>Join the email list (look below for the "Mailing List:" link) for
your local group to find out about activities and the campaign in your
area. We're adding more lists on a daily basis, so if your group
hasn't got one at the moment, please do check back regularly.</p>

<?php
	function display_region_list() {
		$sql = 'SELECT id, region FROM region ORDER BY order_id';
		$q = mysql_query($sql) or die(mysql_error() . ": $sql");

		echo("<ul>");
		while($row = mysql_fetch_assoc($q)) {
			$id = $row['id'];
			$region = $row['region'];
			echo("<li><a href=\"?id=$id\">$region</a></li>\n");
			echo("</li>\n");
		}
		echo("</ul>");

	}

	function display_no_groups_msg($region) {
		return("<p>We currently have no groups in 
			$region.  If you would like to set 
			one up please contact us at 
			<a href=\"mailto:local.groups&#x40;no2id.net\">local.groups&#x40;no2id.net</a></p>");
	}

	function display_groups($region) {
		$tmpl = "SELECT id, name, contact_name, contact_email, website FROM no2id.localgroups WHERE region = '%s' AND no_web != 1 ORDER BY name";
		$sql = sprintf($tmpl, mysql_escape_string($region));
		$groups_q = mysql_query($sql) or die(mysql_error() . ": $sql");

		echo("\n\n<ul>\n");
		while ($group = mysql_fetch_assoc($groups_q)){
			$t = ' <li style="list-style: none;">%s</li>';
			printf($t,
				sprintf('<a href="detail.php?id=%d">%s</a>',
				$group['id'],
				$group['name']));
#			printf($t, $group['website'] ? 
#				sprintf('<a href="%s">Website</a>', $group['website']) :
#				"&nbsp;");
		}
		echo("\n</ul>\n");
	}

	function display_region($r) {

		$sql = "SELECT region FROM region WHERE id = $r";
		$q = mysql_query($sql) or die(mysql_error() . ": $sql");
		$row = mysql_fetch_assoc($q);
		$region = $row['region'];

		echo("<h1 id=\"$r\">$region</h1>");

		$groups_sql = "SELECT * FROM no2id.localgroups WHERE region = '$region' AND no_web = 0 ORDER BY name";
		$groups_q = mysql_query($groups_sql) or die(mysql_error() . ": $groups_sql");
		if (mysql_num_rows($groups_q) == 0){
			echo(display_no_groups_msg($region));
		} else {
			display_groups($region);
		}

	}


	$region = $_GET['id'];

	if($region < 1 || $region > 12) {
		# display list of regions
		display_region_list();
	} else {
		# display info on specific region
		display_region($region);
	}

?>
<p>Please get in touch with them if you can help out locally. If you'd like to join them as a 
local contact for your town, you should be a member and be prepared to be contacted by supporters and 
local journalists.</p>
<!-- don't change anything after this -->
<?php require_once('../inc/pageFooter.php');?>
