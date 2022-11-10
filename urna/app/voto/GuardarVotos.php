<?php

//COLOCAR OS VOTOS NA MAQUINA

class GuardarVotos
{
    public static function Guardar($arquivoDestino, $votoDepuFederal, $votoDepuEstadual, $votoSenador, $votoGovernador, $votoPresiente)
    {
        date_default_timezone_set("America/Sao_Paulo");
        $dadosSessao = [
            'Data' => date('d:m:Y'),
            'Hora' => date('H:m:sa')
        ];

        $dadosVotos = 
        [
            'Data' => date('Y:m:d'),
            'Hora' => date('H:m:sa'),
            'votoDeputadoFederal' => $votoDepuFederal,
            'votoDeputadoEstadual' => $votoDepuEstadual,
            'votoSenador' => $votoSenador,
            'votoGovernador' => $votoGovernador,
            'votoPresidente' => $votoPresiente
        ];
        $dados = array($dadosSessao, $dadosVotos);
        $fp = fopen($arquivoDestino, "a");
        fputcsv($fp, $dadosVotos);
        fclose($fp);
        
    }
}
