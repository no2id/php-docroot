<?php
	// work out parent folder - allows expanded menu for current section/folder
	$path_array = array_reverse(explode('/',$_SERVER['SCRIPT_NAME']));
	$parent_folder = $path_array[1];

	
?>
<!-- <?php echo __FILE__ ?> -->

<div>
<script type="text/javascript" src="/js/awstats_misc_tracker.js">
</script>

<noscript>
<p><img src="/js/awstats_misc_tracker.js?nojs=y" height="0" 
    width="0" alt="AWStats" title="AWStats" style="display: none" /></p>
</noscript>
</div>


<div id="mainMenu"> 
		 
  <ul id="mainMenuNav">
	<li><a href="/">Home</a></li>
	<li><a href="/IDSchemes/">About 'ID cards'</a> 
	  <ul<?php if ($parent_folder == 'IDSchemes') echo ' class="currentSection"'?>>
		<li><a href="/IDSchemes/whyNot">The case against</a></li>
		<li><a href="/IDSchemes/FAQ/"><acronym title="Frequently Asked Questions">FAQ</acronym></a></li>
	<li><a href="/dbstate">The database state</a></li>
        <li><a href="http://ukpollingreport.co.uk/blog/issues/id-cards/">Opinion Polls</a></li>
        <li><a href="/IDSchemes/furtherReading">Further reading </a></li>
	  </ul>
	</li>
	<li><a href="/about/index">About NO2ID</a> 
	  <ul<?php if ($parent_folder == 'about') echo ' class="currentSection"'?>>
		<li><a href="/about/contact">Contact details</a></li>
		<li><a href="/about/supporters">NO2ID supporters</a></li>
		<li><a href="/about/mp_supporters">Public figures vs. ID</a></li>
	  </ul>
	</li>
	<li><a href="/localgroups/">Local groups</a></li>
	<li><a href="/expats/">Overseas</a></li>
	<li><a href="/get-involved/">Get involved</a>
	  <ul<?php if ($parent_folder == 'get-involved') echo ' class="currentSection"'?>>
		<li><a href="/get-involved/support">Register support</a></li>
		<li><a href="/get-involved/join">Become a member</a></li>
		<li><a href="/get-involved/donate">Donate</a></li>
		<li><a href="/get-involved/shop">NO2ID shop</a></li>
		<li><a href="/get-involved/volunteer">Offer your help</a></li>
		<li><a href="/get-involved/buttons">Link to us</a></li>
		<li><a href="/get-involved/other">Other things to do</a></li>
	  </ul>
	</li>
	<li><a href="/news/">Press &amp; Media</a> 
	  <ul<?php if ($parent_folder == 'news') echo ' class="currentSection"'?>>
		<li><a href="/news/newsblog/">NewsBlog</a></li>
		<li><a href="/news/events">Events diary</a></li>
		<li><a href="/news/newsletters/">Newsletters</a></li>
		<li><a href="/news/pressRelease/">Press releases</a></li>
		<li><a href="/images/">Cartoon gallery</a></li>
	  </ul>
	</li>
	<li><a href="/resources/">Resources</a>
	  <ul<?php if ($parent_folder == 'resources') echo ' 
class="currentSection"'?>>
	<li><a href="/resources/audio">Audio collection</a></li>
	<li><a href="/resources/graphical">Graphical materials</a></li>
	<li><a href="/resources/flashcomp">Videos and Images</a></li>
	<li><a href="/resources/motions/">Official motions</a></li>
      </ul>
	</li>
	<li><a href="http://forum.no2id.net/">Discussion forum</a></li>
  </ul>
</div>
