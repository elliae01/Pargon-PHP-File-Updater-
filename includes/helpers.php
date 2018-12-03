<?php

/**
 * Readers template.
 * 
 * @param template $template
 * @param array $data
 */
function render($template, $data = array())
{
	$phppath = __DIR__ . '/../php/views/' . $template . '.php';
	$jspath = __DIR__ . '/../js/' . $template . '.php';
	if (file_exists($phppath))
	{ 
		extract($data); // Creates $title & $script
		require($phppath);
	}
}

function getIP(){
		$ip = isset($_SERVER['HTTP_CLIENT_IP'])?$_SERVER['HTTP_CLIENT_IP']:isset($_SERVER['HTTP_X_FORWARDED_FOR'])?$_SERVER['HTTP_X_FORWARDED_FOR']:$_SERVER['REMOTE_ADDR'];
		return $ip;
}



?>