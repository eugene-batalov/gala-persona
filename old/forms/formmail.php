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
			$err.= "Не заполнено обязательное поле '$var'.<br>";
	$msg.= "$var: $value\n";
}

PRINT "
	<html>
	<head></head>
	<body>
	<p>&nbsp;
	<h1>Ваша заявка принята</h1>
        
	";

if ($err != '')
{
	PRINT "
		<p><b><font color='red'>Сообщение не отправлено.</font></b> 
		<br>Обнаружены ошибки:
		<p>
		$err
		<p>
		Пожалуйста, вернитесь и заполните форму правильно.
		";
}
else
{
	_mail ("отправлено с сайта FA", $_POST["recipient"], $_POST["subject"], $msg);
	
	PRINT "
		<p>Спасибо.
		<p> -отправлено в FAMILY ASSISTANT.
		<p>Наши сотрудники обязательно с Вами свяжутся.

                <p>!!! страница автоматически закроется через 10 секунд...
                
		";
}


?>
<link href="http://www.family-assistant.ru/css/style.css" rel="stylesheet" type="text/css"> 
<SCRIPT>
someTimeout = 10000; // редирект через 10 секунд
window.setTimeout("document.location = 'http://www.family-assistant.ru';", someTimeout);
</SCRIPT>