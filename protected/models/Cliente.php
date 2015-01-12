<?php


class Cliente extends CDbTestCase {
 
 
  public function validaCPF($cpf){
    return !!$cpf;
  }
}