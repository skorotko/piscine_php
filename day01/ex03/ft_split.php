#!/usr/bin/php
<?php
function nonzero($str)
{
	return($str || is_numeric($str));
}
function ft_split($s)
{
	$tmp = array_filter(explode(' ', $s), "nonzero");
	sort($tmp);
	return $tmp;
}
?>