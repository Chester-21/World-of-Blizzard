
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
 "http://www.w3.org/TR/html4/strict.dtd">
 
<html lang="en">
<head>
<link rel=stylesheet href="style3.css" type="text/css" media=screen />
<title>WORLD OF BLIZZARDt</title>



</head>
<center>
<body>
<form class="pure-form pure-form-aligned">
<?php
$dbhost = 'localhost:3036';
$dbuser = 'root';
$dbpass = 'vaseis!';

$worldID = $_POST["worldId"];
$worldName = $_POST["worldName"];
$worldDisc = $_POST["worldDisc"];


$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db('wob_test');


$query="INSERT INTO Worlds VALUES('".$worldID."','".$worldName."','".$worldDisc."')";

$rs = mysql_query($query);

if (!$rs) {
    echo "Could not execute query: $query\n";
    trigger_error(mysql_error(), E_USER_ERROR);
}

echo"Success!";
mysql_close($conn);
?>
<br>
<h3><a href="main.html">Back to Main</a></h3></form>
</body></center>
</html>
