<?php


	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));

	
	Router::connect('/empresa', array('controller' => 'pages', 'action' => 'display', 'empresa'));	
	Router::connect('/produtos', array('controller' => 'pages', 'action' => 'display', 'produtos'));	
	Router::connect('/novidades', array('controller' => 'pages', 'action' => 'display', 'novidades'));	
	Router::connect('/presentes', array('controller' => 'pages', 'action' => 'display', 'presentes'));	
	Router::connect('/promocoes', array('controller' => 'pages', 'action' => 'display', 'promocoes'));	
	Router::connect('/galeria', array('controller' => 'pages', 'action' => 'display', 'galeria'));	
	Router::connect('/chocolate', array('controller' => 'pages', 'action' => 'display', 'chocolate'));	
	Router::connect('/faleconosco', array('controller' => 'pages', 'action' => 'display', 'faleconosco'));	

	Router::connect('/pagina/*', array('controller' => 'pages', 'action' => 'display'));

	CakePlugin::routes();

	require CAKE . 'Config' . DS . 'routes.php';