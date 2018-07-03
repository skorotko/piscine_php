#!/usr/bin/php
<?php
function ft_is_sort($str)
{
	$triger_1 = 0;
	$triger_2 = 0;
	$tmp = array();
	$tmp = $str;
	sort($tmp);
	if(!array_diff_assoc($str, $tmp))
		$triger_1 = 1;
	rsort($tmp);
	if(!array_diff_assoc($str, $tmp))
		$triger_2 = 1;
	if($triger_1 || $triger_2)
		return(TRUE);
	else
		return(FALSE);
}
?>