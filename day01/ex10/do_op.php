#!/usr/bin/php
<?php
    function do_op($do_1, $op, $do_2)
    {
        switch ($op)
        {
            case ("*"):
                echo $do_1 * $do_2 . "\n";
                break;
            case ("+"):
                echo $do_1 + $do_2 . "\n";
                break;
            case ("-"):
                echo $do_1 - $do_2 . "\n";
                break;
            case ("/"):
                echo $do_1 / $do_2 . "\n";
                break;
            case ("%"):
                echo $do_1 % $do_2 . "\n";
                break;
        }
    }
    if ($argc != 4)
    {
        echo "Incorrect Parameters\n";
        exit();
    }
    $do_1 = intval($argv[1]);
    $do_2 = intval($argv[3]);
    $op = trim($argv[2]);
    $do_op = do_op($do_1, $op, $do_2);
?>