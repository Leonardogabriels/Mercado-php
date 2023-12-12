<?php
function dataPtBrParaMySql($dataPtBr){
    $partes = explode("/", $dataPtBr);
   return "{$partes[2]}-{$partes[1]}-{$partes[0]}";
}
function dataMysqlParaPtBr($dataSql){
    $data = new DateTime($dataSql);
    return $data->format("d/m/y");
}