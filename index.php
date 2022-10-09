<?
	$site_path='./';
	$site_url='./';
	ob_start();
	include_once($site_path."rg4_include/lib.php");
	ob_end_clean();
	$LastModified = gmdate("D d M Y H:i:s", filemtime($_SERVER['SCRIPT_FILENAME'])); 
	header("Last-Modified: $LastModified GMT");
	header("ETag: \"$LastModified\""); 
?>
<html>
<head>
<title><?=$_site_info['site_name']?></title>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
</head>
<frameset rows="*,0" frameborder="NO" border="0" framespacing="0">
  <frame src="main/index.php" name="">
<frame src="about:blank"></frameset>
<noframes>
<body alink="#FFFFFF" link="#FFFFFF" vlink="#FFFFFF" text="#FFFFFF" onLoad="location.href='main/index.php'" bgcolor="#FFFFFF">
<a href="main/index.php">메인화면으로</a>
</body>
</noframes>
</html>