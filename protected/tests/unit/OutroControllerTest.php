<?php

	
	class OutroControllerTest extends CDbTestCase{
	
	private $outro;
	
	public function setUp() {
		Yii::import('application.controllers.*');
	    $this->outro = new OutroController('outro');
	}

	function testFirst(){
		
		$this->assertEquals('ae',$this->outro->actionIndex());
	}
}