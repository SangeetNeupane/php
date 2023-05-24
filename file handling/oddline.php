<?php
$sourcefile = 'E:\\File\\first.txt';
$destfile = 'E:\\File\\second.txt';
 
$file_read = fopen($sourcefile, 'r');
$file_write = fopen($destfile, 'w');
$line_number= 0;
 
if ($file_read && $file_write) 
{
    while (($line = fgets($file_read)) != false) 
    {
        $line_number++;
        if ($line_number % 2 == 1) {
            fwrite($file_write, $line);
        }
    }
    fclose($file_read);
    fclose($file_write);
} else {
    // error opening the file.
}
?>