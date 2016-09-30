<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ws
 *
 * @author root
 */
class WS {
    private $client;
    //put your code here
    public function __construct() {
        $this->client = new SoapClient("http://hackathon.bri.co.id/BRIHackathon.asmx?WSDL");
    }
    
    public function infoMerchant() {
        $param = array('kodeMerchant' => '80061', 'password' => 'helloworld');
        $resp = $this->client->InfoMerchant($param);
        $arr = json_decode($resp->InfoMerchantResult);
        return $arr;
    }
    
        /**
     * Not done yet
     * @return type
     */
    public function registrasiMerchant() {
        $param = array('kodeMerchant' => '80061', 'password' => 'helloworld');
        $resp = $this->client->RegistrasiMerchant($param);
        $arr = json_decode($resp->InfoMerchantResult);
        return $arr;
    }
    
    public function registrasiTBank($param) {
        $resp = $this->client->RegistrasiTBank($param);
        $arr = json_decode($resp->RegistrasiTBankResult);
        return $arr;
    }
    
    public function transferTBank($param) {
        $resp = $this->client->TransferTBank($param);
        $arr = json_decode($resp->TransferTBankResult);
        return $arr;
    }
    
    public function printResult($param) {
        echo '<br>';
        foreach ($param as $key => $value) {
            echo $key . ' : ' . $value . '<br>';
        }
    }
}
