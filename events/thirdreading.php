<?php
$page_title = 'Identity Cards Bill: Third Reading De-Brief Public Meeting Registration';
require_once('../inc/pageHead.php');?>

<div>
<h2>Public Meeting</h2>
<p>No2ID are hosting a Public Meeting to discuss 'What Now', following on from the Third Reading in the Commons of the Identity Cards Bill </p>

<p>Once we've finalized things, details will be available on this page, in addition to being emailed to those who've <a 
href="#register">registered</a></p>

<p>If you're unable to attend, or require further information, please contact <a href="mailto:events&#x40;no2id.net">events&#x40;no2id.net</a></p>

</div>

<div id="inPageForm">
<a name="register"></a>  
<form id="registrationsForm" method="post" action="/cgi-bin/thirdreading.cgi">
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
