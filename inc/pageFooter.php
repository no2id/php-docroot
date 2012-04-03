<?php
/*
 * pageFooter.php:
 *     standard 'footer' for no2id.net
 * 
 * Copyright (c) 2009 Adam McGreggor. All rights reserved.
 * Email: <adam@no2id.net> Web: <http://blog.amyl.org.uk>
 *
 * $Id: pageFooter.php,v 1.13 2009/08/26 19:03:35 adam Exp $
 * 
 */
?>
</div>
  </div>
  
    <div id="leftCol"> 
        <?php
            require_once('pageElements/mainMenu.php');
            require_once('pageElements/shopDonate.php');
            require_once('pageElements/search.php');
            require_once('pageElements/cartoon.php');
        ?>	  
    </div>
    
    <div class="clearer"></div>
</div>

<div id="rightCol"> 
  <?php include('pageElements/newsBar.php');?>
</div>

<div id="footerRow"> 
    <br />
    <p style="font-size:smaller">This website is &copy; NO2ID <?php echo date('Y') ?>
        <br/><a href="/content/privacy">Our privacy policy</a></p>
    <p style="font-size:smaller">Hosting generously provided by <a
       href="http://www.mythic-beasts.com">Mythic Beasts</a><br /> 
       <a href="http://www.mythic-beasts.com">
         <img height="59px" width="146px" 
           alt="hosting from Mythic Beasts" 
           title="hosting from mythic beasts"
           src="/images/mythic.png" />
       </a></p>
</div>

</body>
</html>
