<?php 

	function cript($s){
		$x = md5(md5($s).'!@#');
		return $x;
	}

 ?>