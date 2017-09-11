<?php
	// echo phpinfo();
	// die();
	function __autoload($classe)
	{
		if (file_exists('classes'.DIRECTORY_SEPARATOR.$classe.'.class.php')) {
			require_once('classes'.DIRECTORY_SEPARATOR.$classe.'.class.php');
		}
	}
	// pega a url chamada na requisicao
	$url = $_SERVER['REQUEST_URI'];
	// retira os caracteres '/' do começo e do final da URL
	$url = trim($url, '/');
	// transforma a URL em um array, separando as posicoes do array por '/'
	$url = explode('/', $url);

	// instancia o controller com o nome do primeiro parametro
	$controler = new $url[0];
	// caso o segundo parametro nao exista, define o nome do metodo do controller a ser chamado (index)
	if (!array_key_exists(1, $url)) {
		$url[1] = 'index';
	}
	
	$metodo = $url[1];
	echo $controler->$metodo();



