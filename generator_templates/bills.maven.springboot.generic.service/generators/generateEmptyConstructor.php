<?php

function generateEmptyConstructor($className) {
    require_once('convertFromUnderscoreToCamelCase.php');
    return 'public ' . $className . '() {}';
}


$test="testConstructor";
echo generateEmptyConstructor($test);