<?php
$exceptions = array("","","");

$controllerAdviceString = 'package application.controller;' . PHP_EOL;
$controllerAdviceString .= PHP_EOL;
$controllerAdviceString .= 'import org.springframework.hateoas.VndErrors;' . PHP_EOL;
$controllerAdviceString .= 'import org.springframework.http.HttpStatus;' . PHP_EOL;
$controllerAdviceString .= 'import org.springframework.web.bind.annotation.ControllerAdvice;' . PHP_EOL;
$controllerAdviceString .= 'import org.springframework.web.bind.annotation.ExceptionHandler;' . PHP_EOL;
$controllerAdviceString .= 'import org.springframework.web.bind.annotation.RequestMapping;' . PHP_EOL;
$controllerAdviceString .= 'import org.springframework.web.bind.annotation.ResponseBody;' . PHP_EOL;
$controllerAdviceString .= 'import org.springframework.web.bind.annotation.ResponseStatus;' . PHP_EOL;
$controllerAdviceString .= PHP_EOL;
$controllerAdviceString .= 'import application.exception.ApplicationSettingAlreadyExistsException;' . PHP_EOL;
$controllerAdviceString .= 'import application.exception.ApplicationSettingNotFoundException;' . PHP_EOL;
$controllerAdviceString .= 'import application.exception.NoDataAvailableException;' . PHP_EOL;
$controllerAdviceString .= PHP_EOL;
$controllerAdviceString .= '/**' . PHP_EOL;
$controllerAdviceString .= '* @author Billy Bissic' . PHP_EOL;
$controllerAdviceString .= '*' . PHP_EOL;
$controllerAdviceString .= '*/' . PHP_EOL;
$controllerAdviceString .= PHP_EOL;
$controllerAdviceString .= '@ControllerAdvice' . PHP_EOL;
$controllerAdviceString .= '@RequestMapping(produces = "application/vnd.error")' . PHP_EOL;
$controllerAdviceString .= 'public class SettingsControllerAdvice {' . PHP_EOL;
$controllerAdviceString .= PHP_EOL;
$controllerAdviceString .= '}' . PHP_EOL;

foreach($exceptions as $exception) {

}
echo $controllerAdviceString;