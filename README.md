schnellwahl
===========

<b>!!!IMPORTANT!!!<br></br>
I AM NOT A PROGRAMMER! I DON'T KNOW WHAT I AM DOING.<br></br>
!!!IMPORTANT!!!</b>

I would appreciate helpful suggestions.

website (php, javascript) trying to do what the speeddial plugin for firefox does

problems to solve:
-security (injection prevent, authentication system)
-write my own function to take screenshots/thumbnails from other websites

i create thumbnails with that site http://api.thumbsniper.com/api_free.php i dont know if its ok but its the best i could do

setup:
edit the speeddia.php 
  in line 7 set an authentication string for the user
  in line 10 set the database file for the user
  you can add more users with different database files
thumbnails:
  the thumbnails are created in protected/func.php in the getpic function line 11
  to have real screenshots as thumbnails uncomment line 13 and comment line 15 to 20 then the server will use the extern site http://api.thumbsniper.com/ to save the screenshot (i think its one of many security risks within the site so again: i am not a programmer)
  
usage:
copy all the files to a webserver and open the speeddia.php?login=[authentication string] with your browser

