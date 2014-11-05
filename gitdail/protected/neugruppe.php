<?php
session_start();
include_once('func.php');
auth();

if (isset($_GET['name']))
{
$sqlfile = $_SESSION['database'];
$sqldb = new SQLite3($sqlfile);

$sqlquery="SELECT COUNT(idgruppe) AS koordinate FROM gruppe;";
$sqlresult = $sqldb->query($sqlquery);
$sqlres = $sqlresult->fetchArray(SQLITE3_ASSOC);
		
$koordinate= $sqlres['koordinate'] ;
$gruppename=$_GET['name'];

$sqlquery="INSERT INTO gruppe (name, koordinategruppe) VALUES ('$gruppename', $koordinate);";
$sqlresult = $sqldb->query($sqlquery);
$sqldb->close();
include('menu.php');
}


?>

