<?php 
/*-------------------------------------------------------+
| lkfusion Content Management System
| Copyright (C) 2010 - 2011 lovepsone
+--------------------------------------------------------+
| Filename: index.php
| Author: lovepsone
| completed: 0%
+--------------------------------------------------------+
| Removal of this copyright header is strictly prohibited 
| without written permission from the original author(s).
+--------------------------------------------------------*/

	include("conf.php");
	include("lang/lang.php");
	include("include/auth.php");
?>
	<HTML>
	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
	<HEAD><link rel="SHORTCUT ICON" href="images/favicon.ico"><TITLE>lk test_module</TITLE>
	<META http-equiv="content-type" content="text/html; charset=cp1251" />
	<LINK rel="stylesheet" href="lkstyle.css" type="text/css" />
	</HEAD>
	<BODY>
<?php
	if($toplinks=='on')
		{
			echo"<table width='100%' cellpadding='0' cellspacing='0' align='center'>";
			echo"<tr><td style='background : url(templates/$them/images/top_bg.png); width: 100%; height: 26px' class=topnav>";

			echo"<img src='templates/$them/images/topnav_div.gif'><a href='/'>�� ����</a>";
			echo"<img src='templates/$them/images/topnav_div.gif'><a href='character.php?search=player'>����� ������</a>";
			echo"<img src='templates/$them/images/topnav_div.gif'><a href='guild.php'>�������</a>";
			echo"<img src='templates/$them/images/topnav_div.gif'><a href='playerservinfo.php?online' name='online'>������ Online</a>";
			echo"<img src='templates/$them/images/topnav_div.gif'><a href='playerservinfo.php?top=money' name='top_money'>To� ���������� �������</a>";
			echo"<img src='templates/$them/images/topnav_div.gif'><a href=''>To� �����</a>";
			echo"<img src='templates/$them/images/topnav_div.gif'><a href=''>To� ����� 2x2</a>";
			echo"<img src='templates/$them/images/topnav_div.gif'><a href=''>To� ����� 3x3</a>";
			echo"<img src='templates/$them/images/topnav_div.gif'><a href=''>To� ����� 5x5</a></td></tr></table>";

		}

	echo"<table width='100%' cellpadding='0' cellspacing='0' border='0' align='center'>";
	echo"<tr><td colspan='3' style='height: 89px' valign=top><div class='logo'></div></td></tr>";
	echo"<tr><td width='100%' height='86'></td></tr>";
	echo"<tr><td colspan='3' align='center'>";

	$templates = 'templates/'.$them.'/templates.php';
	if (file_exists($templates)) include($templates);
	else include('templates/default/templates.php');

	echo"</td></tr></table>";

	echo"<table width='100%' align='center'><tr><th colspan='3' align='center'><img src='templates/$them/images/table_spodek.jpg'></th></tr></table>";
	echo"<table width='100%' align='center'>";
	echo"<tr><td colspan='3' class='cop' background='templates/$them/images/bg_auhtor.png'>$cop</th></tr>";
	echo"<tr><td colspan='3' class='cop' background='templates/$them/images/bg_auhtor.png'>$rev</th></tr></table>";
?>
</body></html>