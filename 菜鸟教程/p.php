<?php

$file =fopen("welcome.txt","r") or exit("unable to open file");
fclose($file);
if (feof($file)) echo "tailer";

while(!feof($file))
{

    echo fgets($file)
}


?>