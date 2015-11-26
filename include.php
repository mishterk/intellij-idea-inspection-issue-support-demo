<?php

namespace MyNamespace;

/**
 * Class TestClass
 * @package MyNamespace
 */
class TestClass {
	public function testMethod() { }
}

/**
 * @return \MyNamespace\TestClass
 */
function getTestInstance()
{
	return new TestClass();
}