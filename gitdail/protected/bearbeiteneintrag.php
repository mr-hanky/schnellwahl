<?php
session_start();
include_once('func.php');
auth();


if (isset($_GET['url']))
{
$sqlfile = $_SESSION['database'];
$sqldb = new SQLite3($sqlfile);

$titel=$_GET['titel'];
$url=$_GET['url'];
$gruppe=$_GET['gruppe'];
$koordinate=$_GET['koordinate'];
//check the url
$begin=substr($url,0,3);
if (strcmp($begin,"htt")==0)
{

}
else
{
if (strcmp($begin,"www")==0)
{
$url="http://".$url;
}
else
{
$url="http://".$url;
}
}

//delete old pic
$sqlquery="SELECT pic FROM eintrag WHERE koordinate LIKE '$koordinate' AND idgruppe LIKE '$gruppe';";
$sqlresult = $sqldb->query($sqlquery);
$sqlres = $sqlresult->fetchArray(SQLITE3_ASSOC);
$oldpic=$sqlres['pic'];
if (file_exists($oldpic))
{
$del=unlink($oldpic);
}

$urlpic="./img/thumbnail/".$gruppe.$koordinate.$titel.".png";
//get new pic
getpic($url,$urlpic);


//SCHRIFT IN BILD
/*
$string = htmlspecialchars($titel);
$font = 5;
$width = imagefontwidth($font) * strlen($string) ;
$height = imagefontheight($font) ;
$im = imagecreatefrompng("./$urlpic");
//$x = (imagesx($im)/2) - ($width/2);
//$y = (imagesy($im)/2) - ($height/2);
$x=4;
$y=20;
$backgroundColor = imagecolorallocate ($im, 255, 255, 255);
$textColor = imagecolorallocate ($im, 0, 0, 0);
imagestring ($im, $font, $x, $y, $string, $textColor);
//imagettftext($im, 20, 0, 10, 20, $black, $font, $text);
imagepng($im, $urlpic);
*/


//update database
$sqlquery="UPDATE eintrag SET url='$url' , pic='$urlpic' , titel='$titel' WHERE koordinate LIKE '$koordinate' AND idgruppe LIKE '$gruppe';";
$sqlresult = $sqldb->query($sqlquery);
$sqldb->close();
$_GET['gruppe']= $gruppe;
include('content.php');
}

?>

