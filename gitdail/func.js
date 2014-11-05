<script type="text/javascript">
var xmlhttp = new getXMLObject();
var time_variable;
function getXMLObject()  //XML OBJECT
{
   var xmlHttp = false;
   try {
     xmlHttp = new ActiveXObject("Msxml2.XMLHTTP")  ;
   }
   catch (e) {
     try {
       xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");  
     }
     catch (e2) {
       xmlHttp = false ;
     }
   }
   if (!xmlHttp && typeof XMLHttpRequest != 'undefined') {
     xmlHttp = new XMLHttpRequest();
   }
   return xmlHttp;
}
function getData(link,zielDiv) 
{
	      var req = null;

        if (link=="leer") {
                document.getElementById(zielDiv).innerHTML = "";
                return;
        }
         try{ req = new XMLHttpRequest();}
                catch (ms){
                try{ req = new ActiveXObject("Msxml2.XMLHTTP");}
                        catch (nonms){
                                try{ req = new ActiveXObject("Microsoft.XMLHTTP");}
                                catch (failed){
                                        req = null;}}}
        if (req == null){
                alert("Error creating request object!");}
                req.open("GET", link, true);
                req.onreadystatechange = function(){
                        switch(req.readyState) {
                                case 4:
                                        if(req.status!=200) {
                                        }else{
                                                document.getElementById(zielDiv).innerHTML = unescape(req.responseText);
                                                }
                                        break;
                                default:
                                        return false;
                                        break;}};
                req.setRequestHeader("Content-Type","application/x-www-form-urlencoded", "charset=UTF-8");
                req.send(null);
}  

function gruppeerstellen()
{

var name=document.getElementById("tbnamegruppe").value;
getData("getseite.php?seite=ng&name=" + name ,"menu");
getData("getseite.php?seite=leer&","eingabe");
}

function eintragerstellen(gruppe,koord)
{
var url=document.getElementById("tburl").value;
var titel=document.getElementById("tbtitel").value;
getData("getseite.php?seite=ne&titel=" + titel + "&url=" + url + "&koordinate=" + koord + "&gruppe=" + gruppe ,"content");
getData("getseite.php?seite=leer","eingabe");
}

function eintragbearbeiten(gruppe,koord)
{
var url=document.getElementById("tburl").value;
var titel=document.getElementById("tbtitel").value;
getData("getseite.php?seite=be&titel=" + titel + "&url=" + url + "&koordinate=" + koord + "&gruppe=" + gruppe ,"content");
getData("getseite.php?seite=leer","eingabe");
}

function gruppeerstellengui()
{
getData("getseite.php?seite=ngg","eingabe");
}

function eintragerstellengui(gruppe,koord)
{
getData("getseite.php?seite=neg&koordinate=" + koord + "&gruppe=" + gruppe ,"eingabe");
}

function eintragbearbeitengui(gruppe,koord)
{
getData("getseite.php?seite=beg&koordinate=" + koord + "&gruppe=" + gruppe ,"eingabe");
}

function gruppe(gruppe)
{
getData("getseite.php?seite=content&gruppe=" + gruppe ,"content");
}


</script>
