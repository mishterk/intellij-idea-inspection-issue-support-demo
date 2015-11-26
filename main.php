<?php

include 'include.php';

/*
 * DEMO 1: AUTOCOMPLETE WORKING
 *
 * The following implementation works, due to the type declaration in the @var doc.
 */
/** @var \MyNamespace\TestClass $var */
$var = \MyNamespace\getTestInstance();
$var->testMethod();

/*
 * DEMO 2: AUTOCOMPLETE NOT WORKING
 *
 * This chained method invocation does not appear in the autocomplete context menu.
 * It also triggers an inspection notice stating "Method 'getTestInstance' not found in class".
 */
\MyNamespace\getTestInstance()->getTestInstance();