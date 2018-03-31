<?php //addDataCats.php?family=animal&name=nombre&age=4
require_once 'login.php';
$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
mysql_select_db($db_database)
or die("Unable to select database: " . mysql_error());
$family=mysql_real_escape_string($_GET['family']); echo $family."<br />";
$name=mysql_real_escape_string($_GET['name']);echo $name."<br />";
$age=mysql_real_escape_string($_GET['age']);echo $age."<br />";
$query = "INSERT INTO cats VALUES(NULL, '$family', '$name', $age)";
$result = mysql_query($query);
echo "El Id insertado fue :" . mysql_insert_id();
if (!$result) die ("Database access failed: ". $query . mysql_error());
?>
