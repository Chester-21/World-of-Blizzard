
<?php
$dbhost = 'localhost:3036';
$dbuser = 'root';
$dbpass = 'vaseis!';

$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT idWorlds, Name, Description  
	      FROM Worlds';

mysql_select_db('wob_test');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "idWorlds :{$row['idWorlds']}  <br> ".
         "Name: {$row['Name']} <br> ".
         "Description: {$row['Description']} <br> ".
         
         "--------------------------------<br>";
} 

mysql_close($conn);
?>


