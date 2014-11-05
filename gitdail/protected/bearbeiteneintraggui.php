<?php
session_start();
include_once('func.php');
auth();
if (isset($_GET['koordinate']))
{
$gruppe= $_GET['gruppe'];
$koordinate= $_GET['koordinate'];

//get url ant titel from selected entry and create textbox and link to edit the entry
$urlnow="";
$titelnow="";
$sqlfile = $_SESSION['database'];
$sqldb = new SQLite3($sqlfile);
$sqlquery ="SELECT url, titel FROM eintrag WHERE koordinate LIKE '$koordinate' AND idgruppe LIKE '$gruppe'";
$sqlresult = $sqldb->query($sqlquery);
$sqlres = $sqlresult->fetchArray(SQLITE3_ASSOC);
if(isset($sqlres['url']))
{
	$urlnow=$sqlres['url'] ;
	$titelnow=$sqlres['titel'];
	echo "URL: <input id='tburl' type='text' maxlength='500' size='80' value='$urlnow'> Titel: <input id='tbtitel' type='text' maxlength='50' value='$titelnow'><a href='javascript:eintragbearbeiten($gruppe,$koordinate)'>speichern</a>";
}



$sqldb->close();
}

?>
