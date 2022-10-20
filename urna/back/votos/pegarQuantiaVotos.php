<?php

function pegarQuantiaVotos($id) {
    $db = DB::connect();

    $sql = $db->prepare('SELECT * FROM votos WHERE id = :id');
    $sql->bindParam(':id', $id);
    $sql->execute();

    return $sql->fetchObject()->votos;
}