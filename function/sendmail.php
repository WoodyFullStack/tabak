<?php header("Content-type: text/html; charset=utf-8");?>
<?php
	if (isset($_POST['phone'])) {
		$msg="Добрый день, вам оставили заявку на обратный звонок на сайте <Отредактируйте sendmail.php>\r\n";
		if ($_POST['name']!='') {
			$msg.="\r\nИмя: ".$_POST['name'].".";
		}
		$msg.="\r\nТелефон: ".$_POST['phone'].";";
		
		
		$msg= @ strip_tags ($msg);
		$msg = str_replace("\n.", "\n..", $msg);
		
		
		$headers="From: notify@<имя_сайта> \r\nContent-type: text/plain;charset=utf-8\r\nMime-Version: 1.0\r\n";
		
		mail ("info@itps.pro","Заявка на обратный звонок",$msg,$headers)
			or die("error");
	}
	die('done');
?>
