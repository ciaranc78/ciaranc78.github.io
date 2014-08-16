<?php


include("dbconnect.php");  

$query = mysql_query("Select * from guestbook ORDER BY stamp DESC")
 or die(mysql_error());
 

 
 while ($row= mysql_fetch_array($query))
{
 
echo '<div class="page-row box box-border">
<b>Name: </b>'.$row["name"].
'<br><b>Town: </b>'.$row["city"].
'<br><b>County: </b>'.$row["county"].
'<br><b>Country: </b>'.$row["country"].
'<br><b>Date: </b>'.$row["postdate"].
'<br><b>Comments</b><br>'.$row["comment"].'
</div>';
 
}

?>  
