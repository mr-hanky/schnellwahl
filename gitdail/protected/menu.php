<?php
session_start();
include_once('func.php');
auth();
$sqlfile = $_SESSION['database'];
$sqldb = new SQLite3($sqlfile);
$sqlquery ="SELECT name, idgruppe FROM gruppe ORDER BY koordinategruppe";
$sqlresult = $sqldb->query($sqlquery);
  
echo "<table><tr>";

while($sqlres = $sqlresult->fetchArray(SQLITE3_ASSOC))
{
	$name= $sqlres['name'];
	$idgruppe=$sqlres['idgruppe'] ;
	$out="<td><div class='gruppe'><a href='javascript:gruppe($idgruppe)'> ".$name." </a></div></td>";
	echo $out;
}
$sqldb->close();

echo "<td><div class='gruppe'><a href='javascript:gruppeerstellengui()'>..neu erstellen</a></div></td>";
echo "</tr></table>";

?>
