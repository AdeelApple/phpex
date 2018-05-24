<?php 

	// Core php Extras

	
	//Database Connection

$conn = mysqli_connect("localhost", "root", "","database");



	// Run Query
	function q($qry){
		if($rs=mysqli_query($GLOBALS['conn'], $qry)){
			return $rs;
		}else{
			die("->Error In this query!".$qry);
		}
	}

	// Get First Row of result set
	function f_row($qry){
		return mysqli_fetch_array(q($qry));
	}

	// Get first column value of first row in result set
	function getbit($qry){
		return f_row($qry)[0];
	}

	// Generate a random string of specific length/alpha-numeric characters
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