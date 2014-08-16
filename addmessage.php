<html>
<head>
	<title></title>
</head>

<body bgcolor='#ffffff' background="forumblue.jpg" text="#000033" link="#000033" vlink="#000033" alink="#000033">
<?php 
include("dbconnect.php");


$enddatetime=date('d-m-y H:i:s');
$postdate=date('d-m-y');
$iptext=$_SERVER['REMOTE_ADDR'];

#if ($captcha<>boniscan)
#{ echo '<p align=center><b><font size="7" color="#FF0000">!</font></b></p><font face="arial" size="2" color="#000000"><b><p align=center>You failed to enter the security code shown.</p>
#<p align=center>Please click on the button below and enter it.</p><p align=center>This security is designed to prevent automated additions to this forum. </p>
#<p align=center>Apologies for any inconvenience caused.</p>';

?>

<p align=center><FORM> 
<INPUT type="button" value="Click here to go back" onClick="history.back()"> 
</FORM></p> 

<?
#}

#else {


mysql_query("INSERT INTO guestbook (name, city, county, country, comment, postdate) VALUES ('$name', '$town', '$county','$country','$comment', '$postdate')")
or die(mysql_error());

echo '<p style="word-spacing: 0; margin: 0" align="center">&nbsp;</p>
<p style="word-spacing: 0; margin: 0" align="center">&nbsp;</p>
<p style="word-spacing: 0; margin: 0" align="center">&nbsp;</p>
<p style="word-spacing: 0; margin: 0" align="center">&nbsp;</p>
<p style="word-spacing: 0; margin: 0" align="center"><font size="2" face="Arial" color="#800000"><b>Thank
you for taking the time to submit a comment.</b></font></p>
<p style="word-spacing: 0; margin: 0" align="center"><font size="2" face="Arial" color="#800000"><b>It
is only with your support that we can grow.</b></font></p>
<p style="word-spacing: 0; margin: 0" align="center">&nbsp;</p>
<p style="word-spacing: 0; margin: 0" align="center">&nbsp;</p>
<p style="word-spacing: 0; margin: 0" align="center"><font size="2" face="Arial" color="#800000"><b><a href="leavenote.php" ?refresh="1">Return
to Guestbook</a></b></font></p>';
#}
?>
</body>
</html>