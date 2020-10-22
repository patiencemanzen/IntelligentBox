<?php

  class Scyllar {
    // Database configuration
      private $hostName = "localhost";
      private $userName = "vzadgxoj_homoSap";
      private $passWord = "mani@1234567890";
      public $Database = "vzadgxoj_behemoth";

    // Methord frequency
      public function Frequency(){
        date_default_timezone_set('Africa/kigali');
        $bioAccoustic = new mysqli($this->hostName,$this->userName,$this->passWord,$this->Database);
        $bioAccoustic->set_charset('utf8mb4');
        return $bioAccoustic;
      }
  }

?>