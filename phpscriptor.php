<?php
define('BUFSIZ', 4095);
$url = 'http://download1.uploadpot.com/files/1/tpvzelt8eumew5/mantelit_103.rar';
$rfile = fopen($url, 'r');
$lfile = fopen(basename($url), 'w');
while(!feof($rfile))
fwrite($lfile, fread($rfile, BUFSIZ), BUFSIZ);
fclose($rfile);
fclose($lfile);
?>     