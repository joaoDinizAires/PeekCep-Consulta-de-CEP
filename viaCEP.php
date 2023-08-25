<?php 
    class ViaCep{
        public static function consultarCep($cep){
            $curl = curl_init();
            curl_setopt_array($curl,[
                CURLOPT_URL =>"viacep.com.br/ws/".$cep."/json/",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CUSTOMREQUEST => "GET"
            ]);
            $response = curl_exec($curl);
            $data = json_decode($response,true);
            return $data;
        }
    }
?>