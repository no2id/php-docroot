<?php

require_once('../inc/config.php');

$page_title = 'local groups';
$body_extra = 'onload="showMap();" onunload="GUnload()"'; // onload stuff for google maps
// Need to include Google Maps javascript in the head.
$scripts = "<script src=\"http://maps.google.com/maps?file=api&amp;v=2&amp;key="
                . htmlspecialchars(CONFIG_GOOGLE_MAPS_API_KEY)
                . "\" type=\"text/javascript\"></script>";
require_once('../inc/pageHead.php');
require_once('../inc/dbConn.php');?>

<h1>NO2ID Local Groups</h1>
<p>Opposition to identity cards exists everywhere in the UK. 
Now groups are gathering together in many towns and cities under the 
NO2ID banner to campaign against this dangerous legislation. To get more 
involved, please contact your nearest group. If there isn't one near 
you, consider starting one! For more information on starting one (which 
is easy), or if you can't make contact with your nearest group, please 
contact <a href="mailto:local.groups@no2id.net">Matty Mitford 
and Deborah McAlister</a> &#8212; our local groups coordinators.</p>


<map id="lgmap" name="gormap-areas">
<area shape="poly" coords="93,124,102,118,107,111,114,108,111,102,116,96,124,39,101,3,42,5,22,20,16,55,15,62,26,73,34,78,31,98,36,104,46,104,45,112,55,122,60,136,72,136,84,129" href="#Scotland" alt="Scotland" />
<area shape="poly" coords="113,139,110,133,111,130,108,127,106,129,105,125,106,122,108,120,103,116,107,111,110,111,112,109,114,108,111,102,115,96,128,97,138,116,139,135,137,138,131,137,129,139,127,139,121,137,117,140" href="#North East" alt="North East" />
<area shape="poly" coords="92,124,103,116,108,119,106,127,111,126,114,139,110,145,107,149,115,157,113,162,118,168,116,179,107,187,99,186,85,159,86,131" href="#North West" alt="North West" />
<area shape="poly" coords="102,187,82,163,59,174,59,197,47,219,45,231,67,235,90,242,103,231,103,224,96,219,93,213,97,208,91,204,97,194,94,191,97,187" href="#Wales" alt="Wales" />
<area shape="poly" coords="103,233,93,240,75,239,57,239,52,256,43,269,18,282,21,284,40,284,58,284,64,277,83,280,93,269,105,272,118,269,122,263,122,258,118,252,119,250,125,253,124,247,122,245,127,241,125,236,122,228,124,220,122,216,106,221,103,223" href="#South West" alt="South West" />
<area shape="poly" coords="122,261,117,251,125,252,123,245,126,240,123,235,123,230,123,225,125,217,129,215,131,220,143,212,143,220,146,224,142,224,145,230,147,237,150,240,158,240,161,235,168,234,186,232,189,236,184,254,175,258,162,263,146,262,138,266,130,267,121,264" href="#South East" alt="South East" />
<area shape="poly" coords="159,241,163,234,162,230,158,231,155,227,147,231,146,236,149,239,152,241" href="#London" alt="London" />
<area shape="poly" coords="160,235,165,235,189,230,197,208,201,192,189,181,174,178,167,181,161,188,161,194,157,196,151,197,148,198,145,199,149,202,147,206,143,211,142,215,144,220,145,223,142,223,146,228,147,230,154,228,158,231,159,230" href="#East of England" alt="East of England" />
<area shape="poly" coords="161,193,155,198,145,195,147,202,148,204,146,209,143,211,140,215,136,217,134,220,131,220,129,213,131,208,132,207,132,204,130,202,128,200,125,197,124,196,123,193,124,192,120,189,120,186,119,182,116,181,116,174,117,169,123,176,130,177,132,174,137,170,142,172,145,171,150,167,163,168,165,180" href="#East Midlands" alt="East Midlands" />
<area shape="poly" coords="124,220,121,215,107,219,107,222,103,224,101,221,96,221,93,214,97,209,93,204,97,200,97,195,94,192,96,187,100,190,103,186,106,188,118,179,121,185,119,189,124,193,122,195,125,199,132,206,130,214" href="#West Midlands" alt="West Midlands" />
<area shape="poly" coords="150,167,143,173,142,170,138,171,133,175,131,178,125,175,122,174,114,165,113,164,116,159,105,151,106,147,111,147,110,144,112,140,116,139,122,138,126,141,131,139,137,138,139,136,146,126,165,167,154,167" href="#Yorkshire and the Humber" alt="Yorkshire and the Humber" />
<area shape="poly" coords="139,136,133,139,130,139,127,140,123,136,117,141,114,139,111,136,109,128,106,127,108,121,103,116,114,108,111,102,123,89,145,128" href="#" alt="general" />
<area shape="poly" coords="49,158,39,150,37,148,29,150,27,146,23,136,19,141,16,146,10,143,6,140,1,134,11,130,8,126,14,125,19,115,23,118,26,113,30,101,43,108,48,120,53,130,55,137,52,147" href="#Northern Ireland" alt="Northern Ireland" />
</map>

<img width="207" height="286" src="gormap.png" usemap="#gormap-areas" alt="Map showing regions of the country" border="0" style="float: left;" />

<?php
// get groups from database

$regions = array(
            'Scotland',
            'Northern Ireland',
            'North West',
            'North East',
            'Yorkshire and the Humber',
            'Wales',
            'West Midlands',
            'East Midlands',
	    'East of England',
            'South West',
            'London',
            'South East',
            'International'
        );

?>
<ul>
<?php
foreach ($regions as $region){
	echo "<li><a href=\"#$region\">$region</a></li>";
}
?>
</ul>
<p><a href="/resources/motions/index.php">Councils and public bodies across the UK have passed motions against 
ID cards.</a> A number of NO2ID local groups have successfully lobbied 
local councillors and union representatives to get them to do this.</p>

<p>Join the email list (look below for the "Mailing List:" link) for your local group to find out about activities and the campaign in your area. We're adding more lists on a daily basis, so if your group hasn't got one at the moment, please do check back regularly.</p>

<p>If you are in London, there is also a mailing list <em>"id-action"</em> for
those who want to help with occasional leafleting at special events and
other activities in support of local groups anywhere in the capital:</p>

<div style="width:230px; margin: 8px auto;">
<div id="inPageForm">
  <form id="signUpForm" name="id-action-signup" method="post" action="http://www.no2id.net/mailman/subscribe/id-action">
  <div>
  <h3>subscribe to id-action</h3>
  </div>
  <div>
    <label>Your Name</label>
	<input type="text" name="fullname" size="15" />
  </div>
  <div>
    <label>Email Address</label>
	<input type="text" name="email" size="15" />
  </div>
  <div id="button">
  	<input type="submit" name="Subscribe me" value="Subscribe me" />
  </div>

  </form>
</div>
</div>

<?php
 foreach($regions as $region){
	echo "<h1 id=\"$region\">$region</h1>";
	echo "<br />";

        $lgcoord_sql = "SELECT * FROM regional_chieftains WHERE region = '$region'";
        $lgcoord_q = mysql_query($lgcoord_sql) or die(mysql_error() . ": $lgcoord_sql");

               while ($lgcoord = mysql_fetch_assoc($lgcoord_q))
                {
                        $h_name = ($lgcoord['name']);
                        $h_email_addy = preg_replace('/@/', '&#x40;', htmlspecialchars($lgcoord['email_addy']));
			$h_regional_website = ($lgcoord['regional_website']); 
?>
			<table class="reglocalgroup">

                        <?php if ($lgcoord['name'] != '')
                        {
                          ?>
                             <tr>
			       <th style="font-weight:bold;">Regional Co-ordinator:</th>
			       <td colspan="2" style="text-align:left; font-weight:bold;"><?= $h_name ?></td>
			     </tr>
                          <?php 
                        } ?>

                        <?php if ($lgcoord['email_addy'] != '')
                        {
			  ?>
                            <tr><th>Email Address:</th><td colspan="2"><a href="mailto:<?= $h_email_addy ?>"><?= $h_email_addy ?></a></td></tr>
                          <?php
                        } ?>
			
			<?php if ($lgcoord['regional_website'] != '')
			{
			  ?>
                            <tr><th>Regional Website:</th><td colspan="2"><a href="<?= $h_regional_website ?>"><?= $h_regional_website ?></a></td></tr>
                          <?php 
			} ?>
                        </table>

			<br />
                <?
                }

	$groups_sql = "SELECT * FROM no2id.localgroups WHERE region = '$region' AND no_web = 0 ORDER BY name";
	$groups_q = mysql_query($groups_sql) or die(mysql_error() . ": $groups_sql");
	if (mysql_num_rows($groups_q) == 0){
			?>
<p>We currently have no groups in <?php echo $region?>.  If you would like to set one up please contact us
			at <a href="mailto:local.groups&#x40;no2id.net">local.groups&#x40;no2id.net</a></p>
<?php
	} else {
		while ($group = mysql_fetch_assoc($groups_q)){
                        $h_name = ($group['name']);
                        $h_contact_name = ($group['contact_name']);
                        $h_email = preg_replace('/@/', '&#x40;', htmlspecialchars($group['contact_email']));
                        $h_contact_tel = htmlspecialchars($group['contact_tel']);
                        $h_website = htmlspecialchars($group['website']);
                        /* GroupList is the web URL for the mailing list, not its address. */
                        $h_GroupList = htmlspecialchars($group['GroupList']);
			?>
				<table class="localGroup">
					<caption><?= ucwords($h_name) ?></caption>
					<tr>
						<th>Contact:</th>
						<td nowrap="nowrap"><?= $h_contact_name ?></td>
                                                <td align="right"><a href="mailto:<?= $h_email ?>"><?= $h_email ?></a></td>
					</tr>
					<?php if ($group['contact_tel'] != ''){?>
					<tr>
						<th>Phone:</th><td colspan="2"><?= $h_contact_tel ?></td>
					</tr>
					<?php } ?>
					<?php if ($group['website'] != ''){?>
					<tr>
						<th>Website:</th><td colspan="2"><a href="<?= $h_website ?>"><?= $h_website ?></a></td>
					</tr>
					<?php } ?> 
 					<?php if ($group['GroupList'] != ''){?>
                                        <tr>
                                        	<th>Mailing List:</th><td colspan="2"><a href="<?= $h_GroupList ?>"><?= $h_GroupList ?></a></td>
                                        </tr>
                                        <?php 
					} ?>	
				</table>
			<?
		}
	}
	echo '<hr />';
}
?>
<p>Please get in touch with them if you can help out locally. If you'd like to join them as a 
local contact for your town, you should be a member and be prepared to be contacted by supporters and 
local journalists.</p>
<!-- don't change anything after this -->
<?php require_once('../inc/pageFooter.php');?>
