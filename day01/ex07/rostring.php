#!/usr/bin/php
<?php
function nonzero($str)
{
	return($str || is_numeric($str));
}
$count2 =0;
$tmp = array_filter(explode(' ', $argv[1]), "nonzero");
$tmp = array_values($tmp);
while($tmp[$count2])
{
	$array[] = $tmp[$count2];
	$count2++;
}
$count = 1;
while ($array[$count]) 
{
	echo $array[$count] . " ";
	$count++;
}
echo $array[0];
echo "\n";
?>