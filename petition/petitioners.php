<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>no2id-petition</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Refresh" content="120" />
<link rel="stylesheet" type="text/css" href="../style2.css" />
</head>

<body>
<h1 align="left">Petition Sign-Ups</h1>
<p>To date there have been
<!-- add in individual count from database -->
<?php
 		include_once('../inc/dbConn.php');
		  $support_sql = "SELECT COUNT(*) AS count FROM petition";
		  $support_res = mysql_query($support_sql) or die(mysql_error());
		  $support = mysql_fetch_assoc($support_res);
		  ?>
<strong><?php echo $support['count'] ?></strong> individual petitioners</p>
</body>
</html>
