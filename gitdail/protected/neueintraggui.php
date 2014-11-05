<?php
session_start();
include_once('func.php');
auth();
if (isset($_GET['koordinate']))
{
$gruppe= $_GET['gruppe'];
$koordinate= $_GET['koordinate'];
echo "URL: <input id='tburl' type='text' maxlength='500' size='80' value=''> Titel: <input id='tbtitel' type='text' maxlength='50' value=''><a href='javascript:eintragerstellen($gruppe,$koordinate)'>erstellen</a>";
}

?>
