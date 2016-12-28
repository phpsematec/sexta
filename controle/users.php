<?php 

require 'modelo/user.php';

function index()
{
	$data['pagina'] = 'users/lista';
	$data['titulo'] = 'lista de users';
	$data['tabela'] = get_all('users');
	return $data;
}

function cad()
{
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		insert('users',$_POST);
		header('Location: index.php?p=users');
	}else{
		$data['pagina'] = 'users/cad';
		return $data;
	}
}

function edit($id)
{
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		update('users',$id,$_POST);
		header('Location: index.php?p=users');
	}else{
		$data['titulo'] = 'Editar';
		$data['pagina'] = 'users/edit';
		$data['tabela'] = get('users',$id);
		return $data;
	}
}


function del($id)
{
	delete('users',$id);
	header('Location: index.php?p=users');
}


?>