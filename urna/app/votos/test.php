<?php

require_once '../DB/DB.php';

$arquivo = fopen("cargos.csv", "r");
$contador = 0;
while ($linha = fgetcsv($arquivo, 1000, ","))
{
    // echo '<pre>';
    // print_r($linha);
    // echo '</pre>';
    $contador++;

    echo "CODIGO: ". $linha[0] ." CARGO: " . $linha[1] . " NUM DE DIGITOS: " . $linha[2] . '<hr>';
    
    // if($contador > 0) {
    //     $db = DB::connect();
    //     $sql = $db->prepare("INSERT INTO cargos ('') VALUES ('')");
    //     $sql->execute();
    // }
}
$contador = $contador - 1;
echo 'TOTAL DE DADOS: '.$contador;
