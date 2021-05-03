<?php
require_once('../objects/entityAttribute.php');
require_once('../helpers/convertFromUnderscoreToCamelCase.php');
require_once('../helpers/convertFirstLetterToUpperCase.php');
require_once('../objects/DomainClass.php');

function generateDomainClass($name, $strategy, $attributes)
{
    $dbTableName = '';
    $entityName = '';
    $generationStrategyType = 'GenerationType.AUTO';
    $entityAttributes = array();

    $classString = 'package application.domain' . PHP_EOL;
    $classString .= PHP_EOL;


    $classString .= 'import javax.persistence.Column;' . PHP_EOL;
    $classString .= 'import javax.persistence.Entity;' . PHP_EOL;
    $classString .= 'import javax.persistence.GeneratedValue;' . PHP_EOL;
    $classString .= 'import javax.persistence.GenerationType;' . PHP_EOL;
    $classString .= 'import javax.persistence.Id;' . PHP_EOL;
    $classString .= 'import javax.persistence.Table;' . PHP_EOL;

    $classString .= '@Entity' . PHP_EOL;
    $classString .= '@Table(name = "' . $dbTableName . '")' . PHP_EOL;
    $classString .= 'public class ' . $entityName . ' {' . PHP_EOL;

    $classString .= '   @Id' . PHP_EOL;
    $classString .= '   @GeneratedValue(strategy=' . $generationStrategyType . ')' . PHP_EOL;

    /* Declare attributes */
    /* Note: attributes expected are table columns ex: table_column */
    foreach($attributes as $attribute) {
        $classString .= genereateDomainEntity($attribute->getEntityAttributeName(), $attribute.getEntityAttributeDataType());
    }

    /* Generate Getters & Setters */
    foreach($attributes as $attribute) {
        $classString .= generateGetter($attribute->getEntityAttributeName(), $attribute->getEntityAttributeDataType());
        $classString .= PHP_EOL;
        $classString .= generateSetter($attribute->getEntityAttributeName(), $attribute->getEntityAttributeDataType());
    }

    /* Generate Constructor Arguments */
    foreach($attributes as $attribute) {

        $classString .= '';
    }

    $classString .= generateConstructor($attribute->getEntityAttributeName());
    $classString .= '}'. PHP_EOL;

    return $classString;
}

$entityName = '';
$generationStrategy = '';
$attributes = array('', '', '', '', '', '', '', '');


generateDomainClass($entityName, $generationStrategy, $attributes);
