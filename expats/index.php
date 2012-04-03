<?php
$page_title = "expats";
require_once("../inc/pageHead.php");
require_once("../inc/obscureemail.php");?>
<h1>Overseas supporters</h1>

<p>Many of our supporters are expatriates, UK nationals living abroad.</p>

<p>To help our expat supporters stay in contact with the Campaign, and make contact with each other, we have set up an email list that anyone can join. If you email the list, everybody on it, worldwide, will get your message. And all messages are archived, so that you can use the web to read messages sent, questions asked and answered, before you joined the list.</p>

<p>You can also find information on the expats' website, at <a href="http://no2id-expats.chown.ch">http://no2id-expats.chown.ch</a></p>

<p>Ian Graham, who is based in Brussels, has agreed to co-ordinate this virtual expats group, and represent its
interests and concerns. He can be <?=obscureemail("expats@no2id.net", "reached on email")?></p>

<p>Nothing prevents foreign nationals from supporting the campaign, and we welcome support from anyone, anywhere.
But we are specifically concerned with stopping the introduction of ID schemes in Britain and Ireland. Offers
of help from abroad should be sent to <?=obscureemail("office@no2id.net", "the London Office")?></p>

<p>If you subscribe to the mailing list, please add <?=obscureemail("no2id-expats@no2id.net", "the list address")?> to your address book/allowed senders/'Mailing Lists' option&#40;s&#41; so our messages aren't unintentionally picked up by your spam-filters</p>

<div id="inPageForm" style="width:400px; float:left; margin:0 0 0px 0px;">
  <form method="post" action="http://lists.no2id.net/mailman/subscribe/no2id-expats" enctype="multipart/form-data" class="fbform">
  <fieldset>
  <legend>Subscribe to NO2ID's Expats' email list</legend>
   <div>
    <label for="fullname_sup" class="toplabel"; style="float:left;">Name (optional)</label>
    <input type="text" id="fullname_sup" name="fullname" size="30" maxlength="100" />
   </div>
   <div>
    <label for="email_sup" class="toplabel"; style="float:left;">Email Address</label>
    <input type="text" id="email_sup" name="email" size="30" maxlength="100" />
   </div>
   <div>
    <input type="submit" id="email-button_sup" name="email-button" value="Subscribe" />
   </div>
  </fieldset>
  </form>
</div>

<?php require_once("inc/pageFooter.php");?>
