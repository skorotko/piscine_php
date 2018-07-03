#!/usr/bin/php
<?php
function nonzero($str)
{
	return($str || is_numeric($str));
}

function cmp_sort($a, $b)
{
	$a = mb_strtolower($a);
	$b = mb_strtolower($b);
	$i = 0;
	while($a[$i] == $b[$i] && $a[$i] && $b[$i])
		$i++;	
	if($a[$i] == $b[$i])
		return(-1);
	elseif(is_numeric($a[$i]) && ctype_alpha($b[$i]))
		return(1);
	elseif(ctype_punct($a[$i]) && is_numeric($b[$i]))
		return(1);
	elseif(ctype_punct($a[$i]) && ctype_alpha($b[$i]))
		return(1);
	elseif(ctype_alpha($a[$i]) && ctype_alpha($b[$i]))
	{
		if((ord($a[$i]) - ord($b[$i])) < 0)
			return(-1);
		else
			return(1);
	}
	elseif(is_numeric($a[$i]) && is_numeric($b[$i]))
	{
		if((ord($a[$i]) - ord($b[$i])) < 0)
			return(-1);
		else
			return(1);	
	}
	elseif(ctype_punct($a[$i]) && ctype_punct($b[$i]))
	{
		if((ord($a[$i]) - ord($b[$i])) < 0)
			return(-1);
		else
			return(1);	
	}
}
$char = array();
unset($argv[0]);
$argv = array_values($argv);
foreach ($argv as $key)
{ 
	$char = array_filter(explode(' ', $key), "nonzero");
	foreach($char as $key)
		$string[] = $key;
}
usort($string, 'cmp_sort');
foreach ($string as $key)
	echo $key . "\n";
?>