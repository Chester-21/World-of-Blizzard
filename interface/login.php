<?php

$dbhost = 'localhost:3036';
$dbuser = 'root';
$dbpass = 'vaseis!';

$user = $_POST["username"];
$pass = $_POST["password"];

$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db('access');

$SQL = "SELECT * FROM users WHERE username='".$user."' AND password='".md5($pass)."'";

$result = mysql_query($SQL);

if (!$result) {
    echo "Could not execute query: $query\n";
    trigger_error(mysql_error(), E_USER_ERROR);
}

$num_rows = mysql_num_rows($result);

if($num_rows==1){
  $row = mysql_fetch_assoc($result);
  echo "Welcome <b>".$row["username"]."</b>";
  // echo $row["isAdmin"];
  if($row["isAdmin"]){
    // main.html
    header('Location: http://83.212.119.143/main.html');
  }else{
    // mainGuest.html
    header('Location: http://83.212.119.143/mainGuest.html');
  }
}else{
  echo "Invalid Login";
}

mysql_close($conn);
?>
