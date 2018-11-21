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

?>