#!/usr/bin/php
<?php
function nonzero($str)
{
	return($str || is_numeric($str));
}
$tmp = array_filter(explode(' ', $argv[1]), "nonzero");
$count = 0;
$str;
foreach ($tmp as $key)
{
	$str[$count] = $key;
	$count++;
	$str[$count] = " ";
	$count++;
}
$count = 0;
while($str[$count]) 
{
	if($str[$count + 1] != "")
		echo $str[$count];
	$count++;
}
echo "\n";
?>