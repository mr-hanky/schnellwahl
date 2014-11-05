<?php
session_start();
function auth()
{
if($_SESSION['login'] !== true)
{
exit();
}
}

function getpic($site,$filename)
{
//uncomment this for real screenshots
/*copy("http://api.thumbsniper.com/api_free.php?size=3&effect=1&url=$site", "$filename");*/

//comment this if the above line is uncommented
$im = @ImageCreate (50, 100)
      or die ("Kann keinen neuen GD-Bild-Stream erzeugen");
$background_color = ImageColorAllocate ($im, 255, 255, 255);
$text_color = ImageColorAllocate ($im, 233, 14, 91);
ImageString ($im, 1, 5, 5, "test", $text_color);
imagepng($im, $filename);
}

?>
