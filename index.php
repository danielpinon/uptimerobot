<?php require __DIR__ . '/vendor/autoload.php';
$output=null;
$retval=null;
$servico = "MySQL80";
$comand = exec('powershell -NoExit -Command "Get-Service -name '."'$servico'".'"', $output, $retval);
//$comand = exec('powershell -NoExit -Command "Restart-Service -name '."'$servico'".'"', $output, $retval);
dd($comand, $output, $retval);