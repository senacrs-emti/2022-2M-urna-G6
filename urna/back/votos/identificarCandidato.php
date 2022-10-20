<?php

//identifica o candidato pelo numero do voto
function identificar($numeroCandidato) {
    $db = DB::connect();

    $sql = $db->prepare('SELECT * FROM votos WHERE numVoto = :numero');
    $sql->bindParam(":numero", $numeroCandidato);
    $sql->execute();
    
    $obj = $sql->fetchObject();
    return $obj;

}