<?php
// Change this for the title - all titles start with "No2ID -" 
$page_title = 'headline';
// add ../ before inc if page is within a directory - only need to do this on top include
require_once('../inc/pageHead.php');?>
<!-- Put your page in here -->
<h1>ID Scheme Quiz </h1>
<p>Think you've got a good grasp of the government's Identity plans? Try our quiz!</p>
<p>
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="550" height="400">
    <param name="movie" value="/IDSchemes/IDQuiz.swf">
    
    <embed src="/IDSchemes/IDQuiz.swf" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="550" height="400"></embed>
  </object> 
</p>
<?php require_once('../inc/pageFooter.php');?>
