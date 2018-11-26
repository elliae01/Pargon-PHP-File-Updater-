<!--

A controller for the CS372 course project.

-->

<?php 
echo('Hi. You are now on the index.');
require_once('../includes/helpers.php'); 

// determine which page to render
if (isset($_GET['page']))
	$page = $_GET['page'];
else
	$page = 'index';

// show page
switch ($page)
{
	case 'pcuserlist':
		render('templates/header', array('title' => 'Controlled Item PC User List','script'=>'../js/pcuserlist.js'));
		render('index');
		render('templates/footer');
		break;

	case 'lectures':
		render('templates/header', array('title' => 'Lectures'));
		render('lectures');
		render('templates/footer');
		break;

	case 'lecture':
		render('templates/header', array('title' => 'Lecture '.$_GET['n']));
		render('lecture'.$_GET['n']);
		render('templates/footer');
		break;
}

?>
