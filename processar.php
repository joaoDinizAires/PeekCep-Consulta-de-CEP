<?php
    include_once ("API/viaCEP.php");
    if($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['cep'])){
        $cep = $_POST['cep'];
        $cepData = ViaCep::consultarCep($cep);
        return $cepData;
    }
?>