<!doctype html>
<?php
session_start();
require('/include/dbconfigblog.php');
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Arvo:400,700" rel="stylesheet" type="text/css" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body>
<div id="wrapper">
	<div id="wrapper-bgtop">
		<div id="header-wrapper">
			<div id="header">
				<div id="logo">
					<h1><a href="#">Lending System</a></h1>
				</div>
				<div id="menu">
					<ul>
            <li><a href="#" accesskey="1" title="">Homepage</a></li>
						<li><a href="services" accesskey="3" title="">Services</a></li>
						<li><a href="about" accesskey="3" title="">About</a></li>
						<li class="active"><a href="contactus" accesskey="4" title="">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
				<div id="page" class="container">
			<div id="content">
				<div>
<p>TODO: Contact us Form</p>

<?php


function paymentcheck(){


$sql_query="SELECT * FROM blog_posts WHERE publishedstatus='Published' ORDER BY postDate DESC";
$result_set=mysql_query($sql_query);
$row=mysql_fetch_row($result_set);

date_default_timezone_set('Australia/Perth');
$alpha= date("Y/m/d");
$omega=$row[5];

    // RETURN FALSE IF THE DATES ARE BOGUS
    if (!$a = strtotime($alpha)) return FALSE;
    if (!$z = strtotime($omega)) return FALSE;

    // MAN PAGE http://php.net/manual/en/function.gregoriantojd.php
    $a_jd = GregorianToJD( date('m', $a), date('d', $a), date('Y', $a) );
    $z_jd = GregorianToJD( date('m', $z), date('d', $z), date('Y', $z) );
$countdowndate = $z_jd - $a_jd;

echo $countdowndate;

if ($countdowndate <= 15){
?>
<p> lol u need to pay nigga</p>
<?php
}
}
paymentcheck();

  ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="footer">
	<p>Copyright (c) 2012 Untitled Templates. All rights reserved. Design by <a href="http://www.thewebhub.com/">Web Hub</a>. Photos by <a href="http://www.piktyurs.com/">Piktyurs.</a></p>
</div>
</body>
</html>
