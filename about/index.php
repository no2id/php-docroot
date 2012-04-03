<?php
$page_title = "about us";
require_once('../inc/pageHead.php');?>

<h1>About Us</h1>
<p>NO2ID is the UK-wide, non-partisan campaign opposing the government's National Identity Scheme ('ID cards') and the database state.</p>
<p>We bring together individuals and organisations from all sections of the community and seek to ensure that the case against ID cards and the database state is forcefully put forward in the media, in the corridors of power and at grassroots level.</p>
<p>We continue to actively campaign on all fronts for the abolition of the ID scheme and repeal of the Identity Cards Act 2006.</p>

<ul>
  <li><a href="supporters">Who supports us</a> &#8212; organisations which support the campaign</li>
  <li><a href="/about/mp_supporters">Public figures against ID</a> &#8212; a list of those in the public eye who oppose the introduction of identity cards</li>
  <li><a href="/dbstate">What is the Database State?</a></li>
  <li><a href="/join">Join</a> NO2ID</li>
  <li><a href="http://ukpollingreport.co.uk/blog/issues/id-cards">Opinion Polls</a> &#8212; an external site</li>
  <li><a href="contact">Contact details</a> &#8212; useful e-mail addresses, postal addresses and phone numbers</li>
</ul>
<br>

<div class="pledges clearfix">
<h1>Who else says NO?</h1>
<p> Before the Identity Cards Act was even passed, over 12,000 people pledged to refuse to sign up to the government's ID Scheme and donate to towards a legal fund to fight the Act and protect those the government might prosecute for refusal to comply.</p>
<table class="pledgeTable">
<tr>
	<?php
	require_once('../inc/dbConn.php');
        /* Want to show one man and one woman. */
        $ary = rand(0, 1) ? array('male', 'female') : array('female', 'male');
        foreach ($ary as $sex) {
	        $sql = "SELECT * FROM pledger WHERE sex = '$sex' and display = 1 ORDER BY RAND() LIMIT 1";
	        $pledger_2 = mysql_query($sql);
	        $pledger = mysql_fetch_assoc($pledger_2);
		$name = str_replace(' ','&nbsp;',htmlentities($pledger['name']));
		$description = htmlentities($pledger['description']);
		$location = htmlentities($pledger['location']);
		$quote = htmlentities($pledger['web_quote']);
		echo "<td class=\"pledger\">\n";
		echo "\t<img src=\"../images/pledge-photos/{$pledger['photo']}\" alt=\"$name\" width=\"80\" height=\"96\"/>\n\t<p>";
		echo "\t&quot;$quote&quot; ";
		echo "<strong>$name";
		if ($pledger['description'] != ''){
			echo ", $description";
		}
		if ($pledger['location'] != ''){
			echo ", $location";
		}
		echo "</strong>";
		echo "</p></td>\n";
        }
	?>
</tr>
</table>
<p style="clear:both;text-align:center;">Help resist ID cards: 
   <a href="/join">join</a>, or 
   <a href="/donate">donate</a> to NO2ID</p>
</div>
<br />

<h2>About the organisation</h2>
<p>NO2ID is currently an unincorporated Association with a <a href="/constitution.php">Constitution</a> adopted at its first Annual General Meeting on 9th October 2004. The present members of the Advisory Board were elected at NO2ID's fifth AGM on 6<sup>th</sup> December 2009:</p>

<dl>
  <dt>Chair &#8212; Deborah Chay</dt>
  <dd>Is a lecturer in Constitutional and European law and has worked closely with NGOs campaigning for constitutional reform since 1988. She served on the Lord Chancellor's advisory committee on human rights from 2003-2004; was Chair of Charter 88 from 2004-2006; and was Vice-Chair of NO2ID from 2005-2009.</dd>
  <dt>Deputy Chair &#8212; Andy Robson</dt>
  <dd>Trained as a journalist and was formerly campaigns director of Charter 88. He now works as a New Media and communications consultant in London and Geneva, and is a director of two different commercial companies. A co-founder of NO2ID, he currently serves as convener of the Advisory Board.</dd>
  <dt>Geoff Cox</dt>
  <dd>A successful businessman, Geoff retired at 50. He has devoted most of the last 2 years to helping NO2ID as Dorking Group Coordinator and South East Regional Coordinator. From 1992-2000, he helped set up and run BioRegional Group, an environmental charity. He is also starting a local bank - DorkingBank - which will be run along business lines but with an ethical and green mandate.</dd>
  <dt>James Cronin</dt>
  <dd>Is an internet entrepreneur and technologist. He currently runs a firm of fine chocolatiers, as well as Venda.com, an international e-commerce firm which he founded. He is a trustee of the <a href="http://www.openrightsgroup.org/">Open Rights Group</a> and chairs <a href="http://www.mysociety.org/projects/">MySociety</a>, the charity behind FaxYourMP and TheyWorkForYou, harnessing the internet for democratic accountability.</dd>
  <dt>Mark Dziecielewski</dt>
  <dd>Is a security technology technology to governments and the private sector. He is publicly known as the creator of <a href="http://spyblog.org.uk/">SpyBlog</a>, a site which keeps track of UK government threats to privacy and civil liberty, and was instrumental in uncovering the OGC gateway reviews of the ID scheme.</dd>
</dl>

<p>N.B. the members of the Advisory Board offer the membership and donors oversight of the executive and staff of the campaign. Each paid-up member or affiliate of NO2ID has a vote and individual membership is open to anyone who supports our aims and who pays an annual membership fee.</p>

<p>If you are a member or supporter and would like to contact the Advisory Board, please send an e-mail to <a href="mailto:chair@no2id.net">chair@no2id.net</a>. The National Coordinator, Phil Booth (<a href="mailto:national.coordinator@no2id.net">national.coordinator@no2id.net</a>) is the head of the organisation, and policy and administration questions can also be directed to Guy Herbert, General Secretary (<a href="mailto:general.secretary@no2id.net">general.secretary@no2id.net</a>).</p>

<p>NO2ID has a tiny paid staff and relies mainly upon the generous efforts of volunteers. We are constantly on the lookout for people with skills, time and experience that they can offer to the campaign (<a href="mailto:volunteer@no2id.net">volunteer@no2id.net</a>). Our London HQ is the focus of national activities, and we also have a <a href="/localgroups/">growing network of active local groups across the UK</a>.</p>

<p>We have been supported by grants from the Joseph Rowntree Reform Trust Ltd and other individual and corporate donors � as well as by membership fees and merchandise sales.</p>

<br>
<?php require_once("../inc/pageFooter.php");?>
