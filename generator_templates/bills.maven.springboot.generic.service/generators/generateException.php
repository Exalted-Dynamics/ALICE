<?php

function generateExceptionClass($author, $className, $message)
{
    $exceptionClassString = 'package application.exception;' . PHP_EOL;
    $exceptionClassString .= PHP_EOL;
    $exceptionClassString .= '/**' . PHP_EOL;
    $exceptionClassString .= '* @author '. $author . PHP_EOL;
    $exceptionClassString .= '*' . PHP_EOL;
    $exceptionClassString .= '*/' . PHP_EOL;
    $exceptionClassString .= 'public class '. $className . ' extends RuntimeException {' . PHP_EOL;
    $exceptionClassString .= PHP_EOL;
    $exceptionClassString .= 'public '. $className.'() {' . PHP_EOL;
    $exceptionClassString .= 'super("'. $message . '");' . PHP_EOL;
    $exceptionClassString .= '}' . PHP_EOL;
    $exceptionClassString .= PHP_EOL;
    $exceptionClassString .= '}' . PHP_EOL;

    return $exceptionClassString;

}

$author = 'Billy Bissic';
$exceptionClassName = 'NoDataAvailableException';
$exceptionMessage = 'No data available.';
echo generateExceptionClass($author, $exceptionClassName, $exceptionMessage);