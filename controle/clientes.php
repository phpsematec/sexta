<?php 

require 'modelo/cliente.php';

function index()
{
	$data['pagina'] = 'clientes/lista';
	$data['titulo'] = 'lista de clientes';
	$data['tabela'] = get_all('clientes');
	return $data;
}

function cad()
{
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		insert('clientes',$_POST);
		header('Location: index.php?p=clientes');
	}else{
		$data['pagina'] = 'clientes/cad';
		return $data;
	}
}

function edit($id)
{
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		update('clientes',$id,$_POST);
		header('Location: index.php?p=clientes');
	}else{
		$data['titulo'] = 'Editar';
		$data['pagina'] = 'clientes/edit';
		$data['tabela'] = get('clientes',$id);
		return $data;
	}
}


function del($id)
{
	delete('clientes',$id);
	header('Location: index.php?p=clientes');
}




?>