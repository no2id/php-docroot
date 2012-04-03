<?php
$page_title = 'Students Against ID Cards';
require_once('../inc/pageHead.php');?>

<h2><acronym title="Union General Meetings">UGM</acronym> Dates</h2>
<p>Hopefully you've landed here, via the <a href="http://facebook.com/groups/changeme">request
   on Facebook</a> for some details to enable us to support a national campaign of 
   Students' Unions against Identity Cards, ContactPoint, and other Government Databases</p>
</div>

<div id="inPageForm">

<a name="ugm-dates"></a>  
<form id="ugm-dates" method="post" action="/cgi-bin/facebook-students">
  <div>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" size="40" tabindex="101" />
  </div>
  <div>
    <label for="institution">Institution:</label>
    <input type="text" name="institution" id="institution" size="40" tabindex="102" />
  <div>
    <label for="email">Email Address:</label>
    <input type="text" name="email" id="email" size="30" tabindex="103" />
  </div>
  <div>
    <label for="date1">Next UGM Date: <small><em>YYYY-MM-DD</em></small></label>
    <input type="text" name="date1" id="date1" size="10" tabindex="104" />
  </div>
  <div>
    <label for="date2">Second Meeting Date: <small><em>YYYY-MM-DD</em></small></label>
    <input type="text" name="date2" id="date2" size="10" tabindex="105" />
  </div>
  <div>
    <label for="date3">Third Meeting Date: <small><em>YYYY-MM-DD</em></small></label>
    <input type="text" name="date3" id="date3" size="10" tabindex="106" />
  </div>
  <div id="button">
    <input type="submit" value="Send Details" tabindex="105"/>
  </div>
</form>
</div>

<?php require_once('../inc/pageFooter.php');?>
