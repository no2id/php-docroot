<?php
$page_title = 'Prorogation Day Reception Registration';
require_once('../inc/pageHead.php');?>

<div id="inPageForm">
  <h2>Register Now</h2>
<p>To mark the Prorogation of Parliament and the Fall of the Identity Cards Bill, No2ID would like to invite you to join 
us for a celebratory drinks reception, from 18:30 on Thursday, 7<sup>th</sup> March, 2005 at the 
<a href="http://www.beerintheevening.com/pubs/show.shtml/6987/Blue_Posts/Fitzrovia">Blue Posts</a></p>
<address>81 Newman St<br>London<br>W1T 3EU</address>
<p>Nearest Tubes: Tottenham Court Road, Goodge Street, or Oxford Circus</p>
<p><a href="http://www.streetmap.co.uk/newmap.srf?x=529471&y=181412&z=0&ar=Y">Map Link</a></p>
  <form id="registrationsForm" method="post" action="/cgi-bin/prorog2005.cgi">
    <div> 
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" size="25" tabindex="101"/>
    </div>
    <div> 
      <label for="mail">Email:</label>
      <input type="text" name="mail" id="mail" size="25" tabindex="102"/>
    </div>
    <div> 
      <label for="post">Postcode:</label>
      <input type="text" name="post" id="post" size="25" tabindex="103"/>
    </div>
    <div id="button"> 
      <input type="submit" value="Register" tabindex="104"/>
    </div>
  </form>
    <p style="clear:both; font-size:smaller;">We will not share your details with anyone else, nor publish your name without your permission.</p>

</div>
<?php require_once('../inc/pageFooter.php');?>
