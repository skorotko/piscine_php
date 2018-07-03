#!/usr/bin/php
<?php
$key = fopen("php://stdin", "r");
while($key && !feof($key))
{
	echo "Enter a number:";
	$new_line = fgets($key);
	$new_line = str_replace("\n", "", "$new_line");
	if(is_numeric($new_line))
	{
		if($new_line % 2 == 0)
			echo "The number " . $new_line . " is even\n";
		else
			echo "The number " . $new_line . " is odd\n";
	}
	else
		echo "'" . $new_line . "' is not a number\n";
}
fclose($key);
?>