<?php
 
/**
* @test
* @name CientesTest
* @internal root/protected/tests/unit/ClientesTest.php
* @internal Testes para a model Clientes.php
* @author Davi Crystal
*/
class ClientesTest extends CDbTestCase {
 
  /**
  * @test
  * @name testValidaCPF
  * @internal Testes para o método validaCPF
  * @author Davi Crystal
  */
 
  public function testValidaCPF(){
 
    $clientes = new Cliente;
    $this->assertTrue($clientes->validaCPF("87898778"));
 
  }
}