<?php

namespace MyNamespace;

/**
 * Class TestClass
 * @package MyNamespace
 */
class TestClass {
	function testMethod(){}
}

/**
 * @return \MyNamespace\TestClass
 */
function getTestInstance()
{
	return new TestClass();
}