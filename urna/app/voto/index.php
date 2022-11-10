<?php

require 'GuardarVotos.php';

$votoDepuFederal = $_POST['inputDepuFederal'];
$votoDepuEstadual = $_POST['inputDepuEstadual'];
$votoSenador = $_POST['inputSenador'];
$votoGovernador = $_POST['inputGovernador'];
$votoPresidente = $_POST['inputPresidente'];

$arquivoCsv = 'votos.csv';
GuardarVotos::Guardar($arquivoCsv, $votoDepuFederal, $votoDepuEstadual, $votoSenador, $votoGovernador, $votoPresidente);

