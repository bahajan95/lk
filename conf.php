<?php
//=====================================================
// ����������� � ����� ������
$mangos  = array (
'host'   => '127.0.0.1',	// mysql hostname
'user'   => 'mangos',		// mysql username
'pass'   => 'mangos',		// mysql password
'db'     => 'mangos',		// mysql database (mangos)
);

$realmd  = array (
'host'    => '127.0.0.1',	// mysql hostname
'user'   => 'mangos',		// mysql username
'pass'   => 'mangos',		// mysql password
'db'     => 'realmd',		// mysql database (realmd)
);

$characters  = array (
'host'   => '127.0.0.1',	// mysql hostname
'user'   => 'mangos',		// mysql username
'pass'   => 'mangos',		// mysql password
'db'     => 'characters',	// mysql database (characters)
);

$lk  = array (
'host'   => '127.0.0.1 ',	// mysql hostname
'user'   => 'mangos',		// mysql username
'pass'   => 'mangos',		// mysql password
'db'     => 'lk',		// mysql database (lk)
);

//=====================================================
// ��������� ������ �����
$them = "default";		// ���� �����
$encoding = "cp1251";		// ��������� ������ �� mysql
$lang = "ru";			// ���� ����� (���� ��� �������������� ������ ������� ����)
$toplinks = "on"; 		// ���.\����. �������� ���� � ����
$rev = "lk_revision_nr = [114]"; // ������� ��
$cop = "lkfusion v 1.6.59 from LovePSone 2010-2011";	// �������� (����������� ������)

//=====================================================
error_reporting(E_ERROR | E_PARSE | E_WARNING);
//error_reporting(E_ALL);
ini_set('display_errors', 0); //disable on production servers!

//==================================================================
// ������������ ������
//==================================================================
$modules=array();

//==================================================================
// ���������� ��������� � module/module_cfg.php
//==================================================================
include("module/module_cfg.php");

?>