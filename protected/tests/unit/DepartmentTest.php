<?php
	class DepartmentTest extends CDbTestCase {

		function setUp(){
			$this->department = new Department();
		}
		function testPrimeiroMetodo(){
			$this->AssertEquals('first', $this->department->testFirst());
		}
	}