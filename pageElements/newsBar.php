<?php
    function firstN($string, $N) {
            // remove all double and more spaces
            $string = ereg_replace("[[:space:]][[:space:]]+", " ",$string);
            // explode the string on spaces, slice off the amount of words you
            //want and then implode it back to a single string
            $return = implode(" ", array_slice (explode(" ",$string, $N + 1), 0, $N));
            // return it
            return $return;
    } //end firstN
?>
<div id="aboutNO2ID" class="sideBar">
  <h1>Contact NO2ID</h1>
        <p>The NO2ID Campaign<br />
        Box 412<br />
        19-21 Crawford Street<br />
        London W1H 1PJ</p>
	<p style="font-weight:normal;font-size:0.75em;">
		<a href="mailto:enquiries&#x40;no2id.net">enquiries&#x40;no2id.net</a> <br />
		Tel: +44 (0) 20 7340 6077<br />
		Press: <a href="/news/">click here</a>
	</p>
</div>

<div id="twitters" class="sideBar">
    <h1>Twitter</h1>
    <p><a href="https://twitter.com/no2id" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @no2id</a></p>
    <script>!function(d,s,id){var
    js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,
    'script', 'twitter-wjs');</script>
</div>

<div id="takeAction" class="sideBar"> 
  <h1>Take Action</h1>
  <ul>
      <li><a href="/join"><strong>Join</strong> NO2ID now</a></li>
      <li><a href="/pledge/">The NO2ID <strong>Pledge</strong></a></li>
      <li><a href="/donate"><strong>Donate</strong></a></li>
      <li><a href="/localgroups/">Join a <strong>local group</strong></a></li>
      <li><a href="/resources/motions/"><strong>Lobby</strong> your council</a></li>
  </ul>
</div>

<div id="signup" class="sideBar">
    <h1>Signup</h1>
    <?php require_once((dirname($_SERVER['DOCUMENT_ROOT']) . DIRECTORY_SEPARATOR . 'docs/pageElements/sidebar-signup.php'));?> 
</div>

<div id="campaignNews" class="sideBar"> 

  <h1>Campaign News</h1>
  
  <div class="item">
       <script src="https://feeds.feedburner.com/no2idnewsblog?format=sigpro" type="text/javascript" ></script>
       <noscript>
  	    <p>Subscribe to RSS headline updates from: 
	    <a href="https://feeds.feedburner.com/no2idnewsblog"></a>
	    <br/>Powered by FeedBurner</p>
       </noscript>
  </div>

  <div class="item">
    <script src="https://feeds.feedburner.com/no2idnewsletter?format=sigpro" type="text/javascript" ></script>
    <noscript>
        <p>Subscribe to RSS headline updates from:
        <a href="https://feeds.feedburner.com/no2idnewsletter"></a>
        <br/>Powered by FeedBurner</p>
    </noscript>
  </div>

  <div class="item">
  	<script src="https://feeds.feedburner.com/no2idpressreleases?format=sigpro" type="text/javascript" ></script>
	<noscript>
	    <p>Subscribe to RSS headline updates from: 
	    	<a href="https://feeds.feedburner.com/no2idpressreleases"></a>
		<br/>Powered by FeedBurner
	    </p>
	</noscript>
  </div>

</div>
