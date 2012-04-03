<?php
$page_title = 'August/September 2005 Public Meeting Registration';
require_once('../inc/pageHead.php');?>

<div>
<h2>Public Meeting</h2>
<p>No2ID will be hosting a Public Meeting this <strike>August</strike> September.</p>

<p>The previously advertised date of 25<sup>th</sup> August, 2005 has now been <strong>replaced</strong> with the Thursday one week later: the 
1<sup>st</sup> of September, 2005 &#8212; at 7pm.</p>

<p>Details are now being finalized, and we'll hopefully have an update for you early next week.</p>

<p>There is time (and a few spaces still)  to <a href=#register">register</a> as an attendee</p>

<p>We're in the process of confirming a venue in Central London.</p>

<p>Once we've finalized things, details will be available on this page, in addition to being emailed to those who've <a 
href="#register">registered</a></p>

<p>If you're unable to attend, or require further information, please contact <a href="mailto:adam&#x40;no2id.net">Adam McGreggor</a></p>

</div>

<div id="inPageForm">
<a name="register"></a>  
<form id="registrationsForm" method="post" action="/cgi-bin/publicmeets.cgi">
    <div>
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" size="30" tabindex="101"/>
    </div>
    <div>
      <label for="mail">Email:</label>
      <input type="text" name="mail" id="mail" size="30" tabindex="102"/>
    </div>
    <div id="button">
      <input type="submit" value="Register" tabindex="103"/>
    </div>
  </form>
    <p style="clear:both; font-size:smaller;">We will not share your details with anyone else, nor publish your name without your permission.</p>
</div>

<?php require_once('../inc/pageFooter.php');?>
