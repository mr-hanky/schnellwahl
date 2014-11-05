<?php
session_start();

//PRÜFE GET 
if (isset($_GET['login']))
{
if ($_GET['login'] == "abc")
{
$_SESSION['login']=true;
$_SESSION['database']='protected/speeddial_fresh.sqlite';
}
/*elseif ($_GET['login'] == "pIDvCx1mCTABTUCbGpP1pG7SCWc7judsf6dsa6sadf")
{
$_SESSION['login']=true;
$_SESSION['database']='speeddialp.sqlite';
}*/
else
{
exit();
}
}
//PRÜFE SESSION
if (!isset($_SESSION['login']))
{
exit();
}
elseif ($_SESSION['login'] == false)
{
exit();
}

if(!$_SESSION['auswahl1'])
{$_SESSION['auswahl1']=1;}
include_once('func.js');
include_once('protected/func.php');
?>

<!doctype html>
<html><head>
<title>Schnellwahl</title>
<link rel="stylesheet" type="text/css" href="speeddial.css"/>
</head>
<body>
<div id="alles">
<div id="menu">
<?php
include('protected/menu.php');
?>
</div>
<a href='logoff.php'><div id="logout"><div class="div1">logout</div></div></a>
<div id="eingabe"></div>
<div id="content">
<?php
include('protected/content.php');
?>
</div>
</div>
</body></html>
