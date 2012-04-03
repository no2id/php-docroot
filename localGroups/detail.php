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

<?php
	function display_individual_group($g) {
		## should really bail if no_web is set

		printf("Group ID: %d\n", $g);

		$tmpl = "SELECT id, name, contact_name, contact_email, website, no_web FROM no2id.localgroups WHERE id = %d";
		$sql = sprintf($tmpl, $g);
		printf("SQL: [%s]\n", $sql);
		$q = mysql_query($sql) or die(mysql_error() . ": $sql");
		$info = mysql_fetch_assoc($q);

		## should REALLY bail if no group found

		echo("\n\n<table>\n"); ## id=
		$fields = array("name", "contact_name", "contact_email");

		foreach($fields as $f) {
			echo(" <tr>\n");
			printf("  <td>%s</td><td>%s</td>\n",
				$f,
				$info[$f]
				);
			echo(" </tr>\n");
		}
		echo("\n</table>\n");
	}

	if(! isset($_GET['id'])) {
		# bail
	}

	$group_id = (integer) $_GET['id'];

	display_individual_group($group_id);

?>
<p>Please get in touch with them if you can help out locally. If you'd like to join them as a 
local contact for your town, you should be a member and be prepared to be contacted by supporters and 
local journalists.</p>
<!-- don't change anything after this -->
<?php require_once('../inc/pageFooter.php');?>
