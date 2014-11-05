schnellwahl
===========

<b>!!!IMPORTANT!!!<br></br>
I AM NOT A PROGRAMMER! I DON'T KNOW WHAT I AM DOING.<br></br>
!!!IMPORTANT!!!</b>

I would appreciate helpful suggestions.

website (php, javascript) trying to do what the speeddial plugin for firefox does

problems to solve:<br></br>
-security (injection prevent, authentication system)<br></br>
-write my own function to take screenshots/thumbnails from other websites

i create thumbnails with that site http://api.thumbsniper.com/api_free.php i dont know if its ok but its the best i could do

setup:<br></br>
edit the speeddia.php <br></br>
  in line 7 set an authentication string for the user<br></br>
  in line 10 set the database file for the user<br></br>
  you can add more users with different database files<br></br>
thumbnails:<br></br>
  the thumbnails are created in protected/func.php in the getpic function line 11<br></br>
  to have real screenshots as thumbnails uncomment line 13 and comment line 15 to 20 then the server will use the extern site http://api.thumbsniper.com/ to save the screenshot (i think its one of many security risks within the site so again: i am not a programmer)<br></br>
  
usage:<br></br>
copy all the files to a webserver and open the speeddia.php?login=[authentication string] with your browser

