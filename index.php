<?php 

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");


    if ($_POST['resposta'] == 'sim') {
        $json = '{"resposta":"Você está mais próximo de se juntar ao time!"}';
        echo $json;
    }else {
        $json = '{"resposta":"Erro"}';
        echo $json;
    }

?>