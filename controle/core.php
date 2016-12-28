<?php

// pego o valor da url ou defino uma caso nulo
if (isset($_GET['p'])) {
	$p = $_GET['p'];
}else{
	$p = 'clientes';
}
// converto minha string url num array
$p = explode('/', $p);
// carrega o helper
require 'helper/encripta.php'
// carrega o modelo de núcleo
require 'modelo/mcore.php';
// carrego o controle referente a url
require 'controle/'.$p[0].'.php';
// caso nao tenha sido decretada uma acao, defino a padrao
if (!isset($p[1])) {
	$p[1]='index';
}
// conto o numero de indices do array pra saber quantos parametros foram passados na url
$nlinhas = count($p);
// salvo o retorno da função na variavel $tela
switch ($nlinhas) {
	case 3:
		$tela = $p[1]($p[2]);
		break;

	case 4:
		$tela = $p[1]($p[2],$p[3]);
		break;
	
	default:
		$tela = $p[1]();
		break;
}

foreach ($tela as $key => $value) {
	$$key = $value;
}



?>