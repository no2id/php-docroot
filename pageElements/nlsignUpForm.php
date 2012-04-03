<?php
$pre_email = isset($_POST['pre_email']) ? $_POST['pre_email'] : "";
?>

<div id="inPageForm">
  <h2>Stay informed</h2>
  <p>Register your support to receive a FREE supporters pack, regular email newsletter &amp; alerts about NO2ID events in your area.</p>
  <form id="signUpForm" method="post" action="/cgi-bin/nlsignup.cgi">
    <div> 
      <label for="forename">Forename:</label>
      <input type="text" name="forename" id="forename" size="15" tabindex="101"/>
    </div>
    <div> 
      <label for="lastname">Lastname:</label>
      <input type="text" name="lastname" id="lastname" size="15" tabindex="102"/>
    </div>
    <div> 
      <label for="address1">Number, Road:</label>
      <input type="text" name="address1" id="address1" size="15" tabindex="103"/>
    </div>
    <div> 
      <label for="town">Town:</label>
      <input type="text" name="town" id="town" size="15" tabindex="104"/>
    </div>
    <div> 
      <label for="postcode">Postcode:</label>
      <input type="text" name="postcode" id="postcode" size="15" tabindex="105"/>
    </div>
    <div> 
      <label for="email">Email:</label>
      <input type="text" name="email" id="email" size="15" tabindex="106" value="<?php echo $pre_email?>"/>
    </div>

<div>
<hr />
</div>

    <div>
    <p style="clear:both; font-size:smaller;">And to help prevent spam, please enter the "Magic Word", which is:</p> 
    <p style="color:red;"><strong>riddle</strong></p>
    <label for="magicword">Magic Word:</label>
    <input type="text" name="magicword" id="magicword" size="15" tabindex="110" />
    </div>
    
<div>
<hr />
</div>

    <div id="button"> 
      <input type="submit" value="Click to register" tabindex="111"/>
    </div>
    <p style="clear:both; font-size:smaller;">We will not share your details with anyone else, nor publish your name without your permission.</p>
  </form>
</div>
