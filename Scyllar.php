<?php

  class Scyllar {
    // Database configuration
      private $hostName = "localhost";
      private $userName = "vzadgxoj_homoSap";
      private $passWord = "Homo_Sapience";
      public $Database = "vzadgxoj_behemoth";

    // Methord frequency
      public function Frequency(){
        $bioAccoustic = new mysqli($this->hostName,$this->userName,$this->passWord,$this->Database);
        $bioAccoustic->set_charset('utf8mb4');
        return $bioAccoustic;
      }
  }

?>