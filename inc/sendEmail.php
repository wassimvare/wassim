<?php

if(isset($_POST['envoyer'])){
	if(!empty($_POST['name']) AND !empty($_POST['mail']) AND !empty($_POST['sujet']) AND !empty($_POST['message'])){
		$header="MIME-Version: 1.0\r\n";
		$header.='From: "wassim vare"<varewassim7@gmail.com>'."\n";
		$header.='Content-Type:text/html; charset="utf-8"'."\n';
		$header.='Content-Transfer-Encoding: 8bit';

		$message=' .$_POST['name'].
		.$_POST['mail'].
		.$_POST['sujet'].
		.$_POST['sujet'].;

		mail("varewassim7@gmail.com", "site", $message, $header);		 
	}

}

?>