<?


/// Send mail, store message in logs.
function _mail ($from, $to, $subj, $what)
{
	$CONFIG_MAIL_CHARSET = 'windows-1251';
	@mail ($to, $subj, $what, "From: $from\nReply-To: $from\nContent-Type: text/plain; charset=$CONFIG_MAIL_CHARSET\nContent-Transfer-Encoding: 8bit\n");
}


$msg = '';
$err = '';
$required = explode (',', $_POST["required"]);

foreach ($_POST as $var=>$value)
{
	foreach ($required as $t=>$req)
		if (trim($req) == trim($var) && trim($value)=='')
			$err.= "�� ��������� ������������ ���� '$var'.<br>";
	$msg.= "$var: $value\n";
}

PRINT "
	<html>
	<head></head>
	<body>
	<p>&nbsp;
	<h1>���� ������ �������</h1>
        
	";

if ($err != '')
{
	PRINT "
		<p><b><font color='red'>��������� �� ����������.</font></b> 
		<br>���������� ������:
		<p>
		$err
		<p>
		����������, ��������� � ��������� ����� ���������.
		";
}
else
{
	_mail ("���������� � ����� FA", $_POST["recipient"], $_POST["subject"], $msg);
	
	PRINT "
		<p>�������.
		<p> -���������� � FAMILY ASSISTANT.
		<p>���� ���������� ����������� � ���� ��������.

                <p>!!! �������� ������������� ��������� ����� 10 ������...
                
		";
}


?>
<link href="http://www.family-assistant.ru/css/style.css" rel="stylesheet" type="text/css"> 
<SCRIPT>
someTimeout = 10000; // �������� ����� 10 ������
window.setTimeout("document.location = 'http://www.family-assistant.ru';", someTimeout);
</SCRIPT>