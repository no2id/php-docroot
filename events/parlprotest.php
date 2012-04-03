<?php
$page_title = 'Emergency Lobby of Parliament';
require_once('../inc/pageHead.php');?>

<div>
<h2>Emergency Lobby of Parliament!</h2>

<p>NO2ID and Liberty will be holding an emergency lobby of Parliament on 13th February 2006, when the Identity Cards Bill returns to the Commons for consideration of Lords' amendments. We shall be assembling in an area opposite the Houses of Parliament, but probably NOT on Parliament Square itself. We will send you an e-mail with the precise location and other details nearer the time if you sign up below.</p>

<p>The lobby will take place from 12 noon until 1:00pm.</p>

<p>This will be your last chance to make a visible protest against the Bill before it goes into Parliamentary 'ping-pong'. As always, we shall be laying on some props but please do bring your own banners and placards - the bigger and clearer the better.</p>

<p>To get an idea of numbers, we'd appreciate an RSVP to let us know if you can definitely make it.</p>

</div>

<div id="inPageForm">
<a name="register"></a>  
<form id="registrationsForm" method="post" action="/cgi-bin/parlprotest.cgi">
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

<div>
<p>Thanks, and see you on the 13th!</p>
</div>

<?php require_once('../inc/pageFooter.php');?>
