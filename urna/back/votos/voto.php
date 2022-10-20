<?php

$votoDepuFederal = $_POST['votoDepuFederal'];
$votoDepuEstadutal = $_POST['votoDepuEstadual'];
$votoSenador = $_POST['votoSenador'];
$votoGovernador = $_POST['votoGovernador'];
$votoPresidente = $_POST['votoPresidente'];

$votosArray = array(
    "VotoDeputadoFederal" => $votoDepuFederal,
    "VotoDeputadoEstadual" => $votoDepuEstadutal,
    "VotoSenador" => $votoSenador,
    "VotoGovernador" => $votoGovernador,
    "VotoPresidente" => $votoPresidente,
);

$votoObj = new stdClass();
foreach($votosArray as $key => $value) {
    $votoObj->$key = $value;
}

require '../banco/DB.php';

require './identificarCandidato.php';
require './enviarVoto.php';
$candidatoPresidente = identificar($votoPresidente);
var_dump($candidatoPresidente);
echo '<br>';
enviarVoto($candidatoPresidente->id);


