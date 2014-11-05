<?php
session_start();
include_once('protected/func.php');
auth();


if(isset($_GET['seite']))
{
if ($_GET['seite']=="content"){include("protected/content.php");}
if ($_GET['seite']=="beg"){include("protected/bearbeiteneintraggui.php");}
if ($_GET['seite']=="neg"){include("protected/neueintraggui.php");}
if ($_GET['seite']=="ngg"){include("protected/neugruppegui.php");}
if ($_GET['seite']=="leer"){include("protected/leer.php");}
if ($_GET['seite']=="be"){include("protected/bearbeiteneintrag.php");}
if ($_GET['seite']=="ne"){include("protected/neueintrag.php");}
if ($_GET['seite']=="ng"){include("protected/neugruppe.php");}

}

?>
