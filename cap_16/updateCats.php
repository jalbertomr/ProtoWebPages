<?php //updateCats.php?family=viejovalor&newfamily=nuevovalor
      //updateCats.php?name=viejovalor&newname=nuevovalor
      //updateCats.php?age=viejovalor&newage=nuevovalor
require_once 'login.php';
$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
mysql_select_db($db_database)
or die("Unable to select database: " . mysql_error());
$family=mysql_real_escape_string($_GET['family']); echo $family."<br />";
$newfamily=mysql_real_escape_string($_GET['newfamily']); echo $newfamily."<br />";
$name=mysql_real_escape_string($_GET['name']);echo $name."<br />";
$newname=mysql_real_escape_string($_GET['newname']);echo $newname."<br />";
$age=mysql_real_escape_string($_GET['age']);echo $age."<br />";
$newage=mysql_real_escape_string($_GET['age']);echo $newage."<br />";

if(isset($_GET['family']) && isset($_GET['newfamily']))
{
  	$old_value = $_GET['family'];
  	$new_value = $_GET['newfamily'];
  	echo "a actualizar family<br />";
}
if(isset($_GET['name']) && isset($_GET['newname']))
{
  	$old_value = $_GET['name'];
  	$new_value = $_GET['newname'];
  	echo "a actualizar name<br />";
}
if(isset($_GET['age']) && isset($_GET['newage']))
{
  	$old_value = $_GET['age'];
  	$new_value = $_GET['newage'];
  	echo "a actualizar age<br />";
}
$query = "UPDATE cats SET name='$new_value' WHERE name='$old_value'";
$result = mysql_query($query);
if (!$result) die ("Database access failed: ". $query . mysql_error());
echo "Tabla cats actualizada <br />".mysql_info();
?>
