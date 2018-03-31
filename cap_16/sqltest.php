<?php  //sqltest.php
require_once('login.php');
$db_conn=mysql_connect($db_hostname,$db_username,$db_password);
if(!$db_conn) die("No se pudo conectar a MySQL".mysql(error));
mysql_select_db($db_database, $db_conn)
or die("No se pudo seleccionar la base de datos".mysql_error());
if(isset($_POST['delete']) && isset($_POST['isbn']))
{
  $isbn = get_post('isbn');
  $query= "DELETE FROM classics WHERE isbn = '$isbn'";
  if(!mysql_query($query,$db_conn))
    echo "DELETE fallido: $query<br />"
    .mysql_error()."<br /><br />";  
}
if(isset($_POST['author']) &&
   isset($_POST['title']) &&
   isset($_POST['category']) &&
   isset($_POST['year']) &&
   isset($_POST['isbn']))
{
   $author = get_post('author');
   $title = get_post('title');
   $category = get_post('category');
   $year = get_post('year');
   $isbn = get_post('isbn');
   $query = "INSERT INTO classics VALUES".
   "('$author','$title','$category','$year','$isbn')";
   if(!mysql_query($query, $db_conn))
     echo "INSERT fallido: $query<br />".
     mysql_error()."<br /><br />"; 
}      
echo <<<_END
<form action="sqltest.php" method="post"><pre>
    Autor <input type="text" name="author" />
   Titulo <input type="text" name="title" />
Categoria <input type="text" name="category" />
      año <input type="text" name="year" />
     ISBN <input type="text" name="isbn" />
          <input type="submit" value="Salvar" />
</pre></form>
_END;
$query = "SELECT * FROM classics";
$result = mysql_query($query);
if (!$result) die("Consulta a Base de datos Fallido".mysql_error());
$rows = mysql_num_rows($result);
for($j = 0; $j < $rows; ++$j)
{
  $row = mysql_fetch_row($result);
echo <<<_END
<pre>
      Autor $row[0]
     Titulo $row[1]
  Categoria $row[2]
        Año $row[3]
       ISBN $row[4] 
</pre>   	
<form action="sqltest.php" method="post">
<input type="hidden" name="delete" value="yes" />
<input type="hidden" name="isbn" value="$row[4]" />
<input type="submit" value="Borrar" /></form>
_END;
}
mysql_close($db_conn);
function get_post($var){
  return mysql_real_escape_string($_POST[$var]);	
}
?>