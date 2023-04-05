<?php
$array = array( "1", 2, "j" );
// echo array_sum($array);

// var_dump(is_numeric($array[2]));

function str_if(&$str)
{
	if (!is_numeric($str))
	{
		$str = 10 ;
	}
}

str_if($array[2]);
echo $array[2];
?>