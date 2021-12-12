
<?php
// start of php code,
// @author Jon Hurlock (http://cs.swan.ac.uk/~csjonhurlock/)

// whats the file's name?
$file_name = "test.txt";
// open the file, the 'r' property means read file
$file_handler = fopen($file_name, 'r');
print "First five bytes of the file:<b> $file_handler </b> <br />\n";
?>

