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
$startmodule = "news.php";	// ��������� ������ admin.php news.php
$them = "cataclysm";		// ���� �����
$namelk = "������ �������";	// �������� ����� (������ �������)
$encoding = "cp1251";		// ��������� ������ �� mysql
$version = "3.3.5a";		// ������ �������
$gmlevel="3";			// ������� �� ������� ������ ����� � �������
$cena = "5000";			// ���-�� ����� �� ������ (10000coppers = 1g)
$lang = "ru";			// ���� ����� (���� ��� �������������� ������ ������� ����)
$lang_commands = "ru";		// ���� ������ (���� ��� �������������� ������ �������/����. ����)
$toplinks = "on"; 		// ���.\����. �������� ���� � ����
$snow = "off"; 			// ���.\����. ����
$rev = "lk_revision_nr = [1]"; // ������� ��
$cop = "lkfusion v 0.6.59 from LovePSone 2010-2011";	// �������� (����������� ������)

//=====================================================
// ���������� ����� ���. ������������ �� ������
$transfercostage = 300;		// ���-�� ������� �� ������� ���������
$charrename = 10;		// ���-�� ������� �� ��������� ����� ���������
$money = 1;			// ���-�� ������� �� 1 ������ �������
$level = 10;			// �������: (������� �����)*$level*(���-�� ������� ������� ������ ��������)=���-�� ����� �� �������� ������
$maxlevel = 80;			// ������������ ������� �������

//=====================================================
// ��������� �����
$activation = "off";		// ���.\����. ��������� e-mail - on|off
$linkserver = "/email.php";	// ���� �� email.php
$title = "����� E-mail";	// ��������� ������
$from = "admin@mail.ru";	// �� ���� ������

//=====================================================
// ��������� ������� 
$replace = "on";		// ���.\����. ������ �������� ���������� - on|off
$twofactions = "on";		// ���������\��������� 2 ������� �� 1 ��������
$top_money_limit =10;		// ����������� ���������� �������
	
//=====================================================
// ����� ������ �������
$wmzb = 500;			// ������� ������� �� 1$
$wmrb = intval($wmzb/30);	// ������� ������� �� 1 �����. 33 - ���� �������.
$wmeb = intval($wmrb*43);	// ������� ������� �� 1 ����. 43 - ���� ����.
$wmub = intval($wmrb*4);	// ������� ������� �� 1 ������. 4 - ���� ������.

$webmoney = 'https://merchant.webmoney.ru/lmi/payment.asp';	// ���� ���-�����

//=====================================================
// ��������
$zkeeper = '';			// ������
$rkeeper = '';			// ���������� �����
$ekeeper = '';			// ����
$ukeeper = '';			// ������

//=====================================================
// ��������� ����� ���
$prefix = '#wowa';
$prefix2 = '#wowa';
$smsbonuses = 1000;		// ������� ������� �� ���
$smsmodul = 'off';		// ���.\����. ������ ��� - on|off (������ ��������� ���� ��� ������ ���)

//=====================================================
//SOAP (������ �� �������, ���� �� ������������)
$username = 'ADMINISTRATOR';	// ����� �������� � ������ ������� ��
$password = 'ADMINISTRATOR';	// ������ � �������� � ������ ������� ��
$host = "localhost";		// ���� ���
$soapport = 7878;		// ���� SOAP'� (� php ������ ���� ��������� SOAP'�, ������� README.TXT)
 
//=====================================================
error_reporting(E_ERROR | E_PARSE | E_WARNING);
//error_reporting(E_ALL);
ini_set('display_errors', 0); //disable on production servers!

?>