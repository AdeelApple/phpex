<?php 

$conn = mysqli_connect("localhost", "root", "","database");

	function q($qry){
		if($rs=mysqli_query($GLOBALS['conn'], $qry)){
			return $rs;
		}else{
			die($qry);
		}
	}

	function f_row($qry){
		return mysqli_fetch_array(q($qry));
	}
	function getbit($qry){
		return f_row($qry)[0];
	}

	
	function rand_str($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
	{
    	$str = '';
    	$max = mb_strlen($keyspace, '8bit') - 1;
    	for ($i = 0; $i < $length; ++$i) {
    	    $str .= $keyspace[random_int(0, $max)];
    	}
    	return $str;
	}

 ?>