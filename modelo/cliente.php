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
?>