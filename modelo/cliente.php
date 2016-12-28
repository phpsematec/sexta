<?php 


function cad_cliente($v)
{
	$link = mysqli_connect('localhost','root', '','crud');
	foreach ($v as $key => $value) {
	$$key = $value;
	}
	$q = "INSERT INTO clientes VALUES (null,'$nome','$email','$cpf')";
	$result = mysqli_query($link,$q);
}

function update_cliente($id,$v)
{
	$link = mysqli_connect('localhost','root', '','crud');
	foreach ($v as $key => $value) {
	$$key = $value;
	}

}

// function get_cliente($id)
// {
// 	$link = mysqli_connect('localhost','root', '','crud');
// 	$q = "SELECT * FROM clientes WHERE id = $id";
// 	$result = mysqli_query($link,$q);
// 	$linha = mysqli_fetch_assoc($result);
// 	return $linha;
// }

?>