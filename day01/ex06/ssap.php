#!/usr/bin/php
<?php
function nonzero($str)
{
	return($str || is_numeric($str));
}
$tmp = array();
$count = 1;
while ($argv[$count]) 
{
	$count2 = 0;
	$tmp = array_filter(explode(' ', $argv[$count]), "nonzero");
	$tmp = array_values($tmp);
	while($tmp[$count2])
	{
		$array[] = $tmp[$count2];
		$count2++;
	}
	$count++;
}
sort($array);
$count = 0;
while ($array[$count]) 
{
	echo $array[$count] . "\n";
	$count++;
}
?>