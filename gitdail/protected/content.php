<?php
session_start();
include_once('func.php');
auth();

//get selected group
$auswahl=1;
if (isset($_SESSION['gruppe']))
{
$auswahl=$_SESSION['gruppe'];
}
if(isset($_GET['gruppe']))
{
$auswahl=$_GET['gruppe'];
$_SESSION['gruppe']=$auswahl;
}



if(isset($auswahl))
{
$sqlfile = $_SESSION['database'];
$sqldb = new SQLite3($sqlfile);

echo "<table class='center' width='100%' height='100%' align='center'>
  <colgroup>
    <col width='33%' height='33%'>
    <col width='33%' height='33%'>
    <col width='33%' height='33%'>
  </colgroup>";


for ($zeile = 1; $zeile <= 3; $zeile++) {
	echo "<tr>";
	for ($spalte = 1; $spalte <= 3; $spalte++) {  

	echo "<td height=33%  style='text-align:center'>";
  
	$koordinate = $zeile.$spalte;
	$sqlquery ="SELECT url, pic, titel FROM eintrag WHERE koordinate LIKE '$koordinate' AND idgruppe LIKE '$auswahl'";
	$sqlresult = $sqldb->query($sqlquery);
	$sqlres = $sqlresult->fetchArray(SQLITE3_ASSOC);
	if(isset($sqlres['url']))
	{
		$url=$sqlres['url'] ;
		$urlpic=$sqlres['pic'] ;
		$titel=$sqlres['titel'] ;
		//create entry 
		$out="<div class='eintrag'><a href='javascript:eintragbearbeitengui($auswahl,$koordinate)'><div class='bearbeiten'>bearbeiten</div></a><a href='$url'><img  width='242' height='150' src='$urlpic' alt='$titel'></a><div class='bildtitel'>$titel</div></div>";
		echo $out;
	}
	else
	{	
		//create add-entry 
		$out="<div class='eintrag'><div class='bearbeiten'></div><a href='javascript:eintragerstellengui($auswahl,$koordinate)'><img src='erstellen.png' alt='erstellen'></a></div>";
		echo $out;
	}
	echo "</td>";

	}

echo "</tr>";

}

$sqldb->close();
}
?>
