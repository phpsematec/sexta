<?php 

function query($q)
{
	$link = mysqli_connect('localhost','root', '','crud');
	$result = mysqli_query($link,$q);
	mysqli_close($link);
	return $result;
}

function get_all($t)
{
	$q = "SELECT * FROM $t";
	$result = query($q);
	while ($linha = mysqli_fetch_assoc($result)) {
		$tabela[] = $linha;
	}
	return $tabela;
}

function get($t,$id) {
	$q = "SELECT * FROM $t WHERE id = $id";
	$result = query($q);
	$linha = mysqli_fetch_assoc($result);
	return $linha;
}



function update($t,$id,$v)
{
	$a=1;
	$b = count($v);
	foreach ($v as $key => $value) {
		$x.="$key = '$value'";

		if ($a < $b) {
			$x.=",";
		}
		$a++;
	}
	$q = "UPDATE $t SET $x WHERE id = $id";
	$result = query($q);
}


function delete($t,$id) {
	$q = "DELETE FROM $t WHERE id = $id";
	$result = query($q);
}


function insert($t,$v)
{
	$k = implode(",", array_keys($v));
	$x = implode("','", array_values($v));
	
	$q = "INSERT INTO $t ($k)VALUES('$x')";
	$result = query($q);
}
 ?>