<?php
define('BUFSIZ', 4095);
$url = 'http://your-file-url.com/file-name.zip';
$rfile = fopen($url, 'r');
$lfile = fopen(basename($url), 'w');
while(!feof($rfile))
fwrite($lfile, fread($rfile, BUFSIZ), BUFSIZ);
fclose($rfile);
fclose($lfile);
?>     
