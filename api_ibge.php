<?php
function buscarRegioes() {
    $url = "https://servicodados.ibge.gov.br/api/v1/localidades/regioes";

    $curl = curl_init($url);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    $respostaJson = curl_exec($curl);

    curl_close($curl);

    $regioes = json_decode($respostaJson, true);

    return $regioes;
}

?>