<?php


function enviarVoto($candidato) {
    require 'pegarQuantiaVotos.php';
    $quantidadeVotos = pegarQuantiaVotos($candidato);
    $voto = $quantidadeVotos + 1;

    $db = DB::connect();
    // UPDATE `votos` SET `votos` = '3' WHERE `votos`.`id` = 2;
    $sql = $db->prepare("UPDATE votos SET votos = $voto WHERE id = :id");
    $sql->bindParam(':id', $candidato);
    $sql->execute();

    echo 'votou';

}