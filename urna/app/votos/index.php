<?php

$inputDepuFederal = $_POST['votoDepuFederal'];
$inputDepuEstadual = $_POST['votoDepuEstadual'];
$inputSenador = $_POST['votoSenador'];
$inputGovernador = $_POST['votoGovernador'];
$inputPresidente = $_POST['votoPresidente'];

$votoDepuFederal = intval($inputDepuFederal);
$votoDepuEstadual = intval($inputDepuEstadual);
$votoSenador = intval($inputSenador);
$votoGovernador = intval($inputGovernador);
$votoPresidente = intval($inputPresidente);

// $headers = ['Deputado Federal', 'Deputado Estadual', 'Senador', 'Governador', 'Presidente'];
$dados = [
  [
    10,
    20,
    30,
    40,
    50
  ]
];

$arquivo = fopen("votos.csv", "a");
// fputcsv($arquivo, $headers);
foreach($dados as $linha) {
  fputcsv($arquivo, $linha);
}

echo file_get_contents("votos.csv");
