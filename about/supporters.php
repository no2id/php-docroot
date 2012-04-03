<?php
$page_title = "our supporters";
require_once("../inc/pageHead.php");
require_once("../inc/dbConn.php");
?>
<h1>Our Supporters</h1>
<p>NO2ID is supported by a broad range of organisations, all of whom are concerned about the proposed imposition
of national identity cards onto the UK population.</p>
<p>Should your organisation be on this list? If so please <a href="mailto:affiliates&#x40;no2id.net">get 
  in touch</a>.</p> 
<div style="clear:both">
<?php
// create field of supporter logos
$i_list_sql = "SELECT name,logo FROM supporter_org WHERE logo <> ''";
$i_list = mysql_query($i_list_sql) or die(mysql_error());
while ($org = mysql_fetch_assoc($i_list)){

	echo "<div style=\"height:91px;float:left;margin:5px;\"><img src=\"/images/affiliateLogos/{$org['logo']}\" alt=\"{$org['name']} support NO2ID\"/></div>\n";
}
?>
</div>
<div style="clear:both">
<?php
$support_groups = array('party' => 'Political Parties','ngo' => 'NGOs','tu' => 'Trades Unions','other' => 'Other');

//foreach ($support_groups as $type => $label) {
//$s_list_sql = "SELECT name,homepage FROM supporter_org WHERE type = '$type' ORDER BY name";

$s_list_sql = "SELECT name,homepage FROM supporter_org ORDER BY name";
$s_list = mysql_query($s_list_sql) or die(mysql_error());
echo '<div class="supportersList">';
//echo "<h2>$label</h2>";
?> 
<ul>
  <?php
		  while ($org = mysql_fetch_assoc($s_list)){
		  	echo '<li>';
			if ($org['homepage'] != ''){
				echo "<a href=\"{$org['homepage']}\">";
			}
			echo "{$org['name']}";
			if ($org['homepage'] != ''){
				echo '</a>';
			}
			echo '</li>';
		  }
			echo '</ul>';
			echo '</div>';
//}
	  ?>
</div>
<p style="clear:both;">Plus a growing number of individuals and <a href="mp_supporters.php">several 
	Members of Parliament</a></p>
<?php require_once("../inc/pageFooter.php");?>
