



<html>
<head>
	<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"></head>

<body bgcolor="#ffffff" bgproperties="fixed" text="#000000" link="#000000" vlink="#000000" alink="#000000">

<script language="JavaScript">
<!--
document.body.style.scrollbarBaseColor='#AC95A5'
document.body.style.scrollbarFaceColor='#D2BFE0'
document.body.style.scrollbarShadowColor='#6b3e3e'-->
</script>
<?php

include("dbconnect.php");



$pdo = Database::connect();

$currentforum ='0';


echo '<div class="panel panel-theme">
                                        <div class="panel-heading">Panel heading</div>
                                        <div class="panel-body">
                                            <p>Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur.</p>
                                            
                                            <ul class="list-inline">
                                               <li><i class="fa fa-star"></i>Lorem ipsum</li>
                                               <li><i class="fa fa-star"></i>Nulla volutpat</li>
                                               <li><i class="fa fa-star"></i>Phasellus iaculis</li>
                                            </ul>
                                        </div>
                                        <div class="table-responsive">                      
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>';

                                                    $sql = "SELECT * FROM topics WHERE forumno='0'";
                     foreach ($pdo->query($sql) as $row) {
                            echo  $row['title'] . '</p>';
                            
                   }

 
                            echo                         '<th>#</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>@fat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Larry</td>
                                                        <td>the Bird</td>
                                                        <td>@twitter</td>
                                                    </tr>
                                                </tbody>
                                            </table><!--//table-->
                                        </div><!--//table-responsive-->


// set up a dropdown menu so thst forums can be filtered.




$queryselected = mysql_query("Select forumno, forumname
							FROM forumno 
							WHERE forumno='$currentforum'
							ORDER BY forumno")
 or die(mysql_error());
  while ($rows= mysql_fetch_array($queryselected))
{
    echo '<option selected value='.$rows['forumno'].'">'.$rows['forumname'].'</option>'; 
}

echo '</select><input type="submit" value="Go"></form>
    </td></tr></table>';



?>

<table width='730' align='center' border='0' cellspacing='0' bordercolor='#000000' cellpadding='0'>
  <tr> 
  </tr>

    <?php
	
	
	$lastyear = date("Ymd", strtotime("-1 year"));	
	
/* Works out the time since the entry post, takes a an argument in unix time (seconds) */
function time_since($original) {
    // array of time period chunks
    $chunks = array(
        array(60 * 60 * 24 * 365 , 'year'),
        array(60 * 60 * 24 * 30 , 'month'),
        array(60 * 60 * 24 * 7, 'week'),
        array(60 * 60 * 24 , 'day'),
        array(60 * 60 , 'hour'),
        array(60 , 'minute'),
    );
    $today = time(); /* Current unix time  */
    $since = $today - $original;
    
    // $j saves performing the count function each time around the loop
    for ($i = 0, $j = count($chunks); $i < $j; $i++) {
        
        $seconds = $chunks[$i][0];
        $name = $chunks[$i][1];
        
        // finding the biggest chunk (if the chunk fits, break)
        if (($count = floor($since / $seconds)) != 0) {
            // DEBUG print "<!-- It's $name -->\n";
            break;
        }
    }
    
    $print = ($count == 1) ? '1 '.$name : "$count {$name}s";
    
    if ($i + 1 < $j) {
        // now getting the second item
        $seconds2 = $chunks[$i + 1][0];
        $name2 = $chunks[$i + 1][1];
        
        // add second item if it's greater than 0
        if (($count2 = floor(($since - ($seconds * $count)) / $seconds2)) != 0) {
            $print .= ($count2 == 1) ? ', 1 '.$name2 : ", $count2 {$name2}s";
        }
    }
    return $print;
}		
	



$enddatetime=date('d-m-y H:i:s');
echo "<tr><td width='100%'><table width='100%' cellpadding='3' align='center' border='0' cellspacing='0' bordercolor='#000000'>";

$query1 = mysql_query("Select UNIX_TIMESTAMP(topics.stamp) as unixdate, topics.lastposter, topics.topicnum, topics.poster, topics.pinned, topics.title, topics.date, topics.date2, topics.forumno, max(posts.id) AS pid
							FROM topics, posts
							where topics.topicnum = posts.topicnum AND
							topics.live='true' AND topics.stamp > $lastyear $forumfilter
							GROUP BY topics.stamp, topics.lastposter, topics.topicnum, topics.poster, topics.pinned, topics.title, topics.date, topics.date2, topics.forumno
							ORDER BY topics.pinned DESC, pid DESC")
 or die(mysql_error());

$numrows = mysql_num_rows($query1);
if ( $numrows < 1 ) { echo '<font face="arial" size="2">No Forum Entries'; } 
 
 
 
 while ($row1= mysql_fetch_array($query1))
{



//findout how if there are any responses to the topic
$seekquery = mysql_query("Select post from posts WHERE topicnum=".$row1["topicnum"]." AND live='true'") or die(mysql_error());
$numrows =mysql_num_rows($seekquery);





//lastposter or creator
if ( $row1["pinned"] == '1' ) {$backtop = 'fortop3';  $backbottom = 'forbottom3'; }

else if ( $numrows==1 ) { $postername = $row1["poster"]; $backtop = 'fortop2'; $backbottom = 'forbottom2'; } 
else { $postername = $row1["lastposter"]; $backtop = 'fortop'; $backbottom = 'forbottom';}


	

echo '<tr><td background="'.$backtop.'.jpg">';
if ( $row1["pinned"] == '1' )

{
	$fontcolor1 = '#D2BfE0';
	$fontcolor2 = '#ffffff';
	
	echo "<img src='pinned.jpg' width='12' height='12' />"; }
	
	else { 
		$fontcolor1 = '#000000';
	$fontcolor2 = '#642f81';
	
	echo ""; }


echo "<b>&nbsp;&nbsp;&nbsp;<a href='showtopic.php?topic=".$row1["topicnum"]."'><font face='arial' size='2' color='".$fontcolor1."'><b>".$row1["title"]." <font face='arial' size='1' color='".$fontcolor1."'></font></a></b>
&nbsp;&nbsp;&nbsp;<font face='arial' size='2' color='".$fontcolor1."'>Started by ".$row1["poster"]."</td></tr>
<tr>";



//allow users to peek at the post
$peekquery = mysql_query("Select post,UNIX_TIMESTAMP(stamp) as unixdate2  from posts WHERE topicnum=".$row1["topicnum"]." AND live='true' ORDER BY ID DESC LIMIT 1") or die(mysql_error());
 while ($rowp= mysql_fetch_array($peekquery))
{
	
if (	$rowp["unixdate2"] <> 0 ) {
	
	$topiccreated=($rowp["unixdate2"]);


echo "<td  bgcolor='#F0F0F0'><font face='arial' size='2'><b>$postername: </b><font face='arial' size='2'>$rowp[post]</td>";	

echo "</tr>";
echo "<tr><td  background='".$backbottom.".jpg'><font face='arial' size='2' color='".$fontcolor1."'>&nbsp;&nbsp;<b>".time_since($topiccreated)." ago. | <a href='showtopic.php?topic=".$row1["topicnum"]."'><font face='arial' size='2' color='".$fontcolor2."'><b>See More</b></td></tr>";
echo "<tr><td>&nbsp;</td></tr>";
}


else {
	
echo "<td  bgcolor='#F0F0F0'><font face='arial' size='2'><b>$postername: </b><font face='arial' size='2'>$rowp[post]</td>";	

echo "</tr>";
echo "<tr><td  background='".$backbottom.".jpg'><font face='arial' size='2' color='".$fontcolor1."'>&nbsp;&nbsp;<b> Older Posts | <a href='showtopic.php?topic=".$row1["topicnum"]."'><font face='arial' size='2' color='".$fontcolor2."'><b>See More</b></td></tr>";
echo "<tr><td>&nbsp;</td></tr>";
	

}

}
}

echo "</table>";


?>
</tr>
</table>

<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
