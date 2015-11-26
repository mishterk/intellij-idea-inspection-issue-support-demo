<?php

include 'include.php';

/*
 * This chained method invocation does not appear in the autocomplete context menu.
 * It also triggers an inspection notice stating "Method 'getTestInstance' not found in class".
 */
\MyNamespace\getTestInstance()->getTestInstance();