<?php
$document="logs.txt";
$openDoc=fopen($document, "a");

ftruncate($openDoc, 0);
?>