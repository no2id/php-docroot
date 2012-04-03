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

$release['title'] = htmlentities($release['title']);
$page_title = "Press Release {$release['title']}";
require_once("../../inc/pageHead.php");?> 
<h1>Labour heartlands say NO2ID</h1>
<p>Hackney constituency Labour Party, one of the country&#8217;s Labour heartlands, 
  have voted to reject the planned national ID card and database system, calling 
  on their MP to oppose the Bill. The motion was passed unopposed.</p>
<p>The MP for Hackney North and Stoke Newington, Diane Abbott (1), voted against 
  the Bill at its second reading, and spoke strongly against it in the chamber.</p>
<p>Phil Booth, national coordinator of the NO2ID campaign (2) said:</p>
<p>&#8220;This should strike an ominous tone at Labour headquarters. First the 
  trade unions (3), and now some of Labour&#8217;s most loyal grassroots party 
  members are making their objections perfectly clear.</p>
<p>&#8220;Opposition to his Bill has spread throughout public and political life 
  &#8211; every party is united in their total rejection of this scheme, and now 
  even staunch Labour members are beginning to speak out.&#8221;</p>
<p>The government&#8217;s increasing desperation to drive through the Bill - passed 
  by only 31 votes last week - is reflected in the highly partisan make-up of 
  the Standing Committee. Despite 24 out of the 33 MPs who spoke in Parliament 
  at second reading being highly critical of the Bill - including several Labour 
  MPs - the Committee contains no serious Labour critics of the scheme and not 
  one, but two Home Office ministers and two Parliamentary Private Secretaries 
  with clear connections to the Home Office.</p>
<p>Tory barrister Edward Garnier said that it was &#8220;intellectually dishonest&#8221; 
  to provide no reflection of the opinions of the House (4). Tony McNulty yesterday 
  admitted that the Bill had &#8220;not received excessive scrutiny&#8221; (5) 
  when it was first introduced last year, but Committee business has nonetheless 
  been guillotined to finish on 19th July - just before Parliament retires for 
  its summer recess. </p>
<p>Phil Booth said: &#8220;This obsession to pass the Bill at all costs, driven 
  by an agenda that no-one will admit to and flying in the face of all common 
  sense should be of concern to every person in the country. How can a government 
  which is willing to go to such lengths to pass this legislation ever be trusted 
  to defend our privacy and personal freedoms?&#8221;</p>
<p>-ENDS-</p>
<p>Notes:</p>
<p>(1) More information available on Diane Abbott&#8217;s site: <a href="http://www.dianeabbott.org.uk/index.php?news=latest" target="_blank">http://www.dianeabbott.org.uk/index.php?news=latest</a><br>
  (2) NO2ID is cross-party, non-partisan national campaign against ID cards and 
  the database state.<br>
  (3) Eight trade unions including Unison (who voted to affiliate to NO2ID), T&amp;GWU, 
  and GMB voted to reject ID cards before the second reading, calling on Labour 
  MPs to vote against the Bill. As reported in the press: <a href="http://politics.guardian.co.uk/homeaffairs/story/0,11026,1515460,00.html%20" target="_blank">http://politics.guardian.co.uk/homeaffairs/story/0,11026,1515460,00.html 
  </a><br>
  (4) As reported: <a href="http://politics.guardian.co.uk/homeaffairs/story/0,11026,1522026,00.html" target="_blank">http://politics.guardian.co.uk/homeaffairs/story/0,11026,1522026,00.html</a><br>
  (5) As reported in Hansard: <a href="http://www.publications.parliament.uk/pa/cm200506/cmstand/d/st050705/am/50705s01.htm" target="_blank">http://www.publications.parliament.uk/pa/cm200506/cmstand/d/st050705/am/50705s01.htm</a> 
</p>
<p>For further information, or for immediate or future interview, please contact 
<ul>
    <li>James Baker, <a href="mailto:campaigns@no2id.net">Campaigns</a> Manager &#8211; 078 1760 5162</li>
    <li>Guy Herbert, <a href="mailto:general.secretary@no2id.net">General Secretary</a> &#8211; 079 5654 4308</li>
</ul>
<br />
</p>
<p><a href="index.php">Back to all press releases</a></p>
<?php require_once("inc/pageFooter.php");?>
