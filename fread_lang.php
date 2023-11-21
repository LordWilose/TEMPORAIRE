<?php
$ressource = fopen("index.php");
echo fread($ressource, filesize('index.php'));
?>
