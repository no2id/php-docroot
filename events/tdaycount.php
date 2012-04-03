<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>No2ID Training Day</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="../style_new2.css" />
</head>

<body>
<h1 align="left">Training Day Sign-Ups</h1>
<p>Currently there are
<!-- add in individual count from database -->
<?php
 		include_once('../inc/dbConn.php');
		  $support_sql = "SELECT COUNT(*) AS count FROM trainingday";
		  $support_res = mysql_query($support_sql) or die(mysql_error());
		  $support = mysql_fetch_assoc($support_res);
		  ?>
<strong><?php echo $support['count'] ?></strong> signups</p>
</body>
</html>
