<?php 
/* 
 * pageHead.php:
 *     standard 'header' for no2id.net 
 * 
 * Copyright (c) 2010 Adam McGreggor. All rights reserved. 
 * Email: <adam@no2id.net> Web: <http://blog.amyl.org.uk> 
 * 
 * $Id: pageHead.php,v 1.54 2011/02/05 13:42:07 adam Exp $
 * 
 */ 
?>
<?php
if (!isset($page_title)) {
	$page_title = '';
}
echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
echo "<?xml-stylesheet href=\"no2id-main.css\" type=\"text/css\" ?>\n";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-gb">

<head>
    <title><?php echo $page_title?> &#187; NO2ID</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="/no2id-main.css"/>
    <link rel="stylesheet" media="print" type="text/css" href="/print.css"/>
    <link rel="press_release feed" type="application/rss+xml" title="NO2ID Press Release Feed" href="http://pressreleases.wp.no2id.net/feed/" />
    <link rel="newsletter feed" type="application/rss+xml" title="NO2ID Newsletter Feed" href="http://newsletter.wp.no2id.net/feed/" />
    <script src="/menu.js" type="text/javascript"></script>
    <script src="/obscureemail.js" type="text/javascript"></script>
    <?php if (isset($scripts)) {echo $scripts;} ?>

    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-20535816-3']);
      _gaq.push(['_setDomainName', 'no2id.net']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
</script>
</head>

<body<?php if (isset($body_extra)) {echo ' ' . $body_extra;}?>>
<div id="mainLogo">
	<span id="logo"><a href="/" class="head_img_link"><img src="/images/NO2ID_logo-20082408.png"  alt="NO2ID | Stop the database state" width="263" height="101" /></a></span>

</div>
<div id="contentRow">
<div id="mainCol">
<div id="mainContent">
