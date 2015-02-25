<?php
    $texto= $_POST["md5"];
    $texto=strtoupper($texto);
    $textomd5=md5($texto);
    echo ("Texto Original -- ".$texto);
    echo ("<br>");
    echo ("El texto siempre lo convierto a mayusculas");
    echo ("<br>");
    echo ("Texto en MD5 -- ".$textomd5);
?>