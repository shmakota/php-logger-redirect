<?php
# THANKS FOR USING MY LOGGER :) (i just edited another logger and improved it) - KOTA;

# GET IP;
$target=$_SERVER["REMOTE_ADDR"];
# Store Filename In a Variable;
$document="logs.txt";

# OPEN FILE;
$openDoc=fopen($document, "a");

# WRITE IP & DATE;
fwrite($openDoc, $target);
fwrite($openDoc, "\n");
fwrite($openDoc, date("Y/m/d"));
fwrite($openDoc, "\n");
fwrite($openDoc, date("-----------"));
fwrite($openDoc, "\n");

# CLOSE FILE;
fclose($openDoc);

# GET REDIRECT LINK;
$link = $_GET['link'];

# REDIRECT;
header("Location: $link");
?>