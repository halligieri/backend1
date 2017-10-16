<?php
if($_POST){

$file = fopen("./../data-1.json", "r");
$contenido = fread($file, filesize("../data-1.json"));
$contenido = json_decode($contenido);
echo json_encode($contenido);
fclose($file);
}else{
    header("location:../");
}
