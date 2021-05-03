<?php
require_once('../objects/entityAttribute.php');
require_once('../helpers/convertFromUnderscoreToCamelCase.php');

function generateConstructor($entityAttributes, $entityName) {
    $constructorString = 'public ' . $entityName . '(';
    $length = count($entityAttributes);
    $index = 0;

    foreach($entityAttributes as $attribute) {
        $name = $attribute->getEntityAttributeName();
        $dataType = $attribute->getEntityAttributeDataType();

        if($index!=$length-1) {
            $constructorString .= $dataType . ' ' . $name . ', ';

        } else {
            $constructorString .= $dataType . ' ' . $name . ') {'. PHP_EOL;
        }
        $index++;
    }
    $constructorString .= PHP_EOL;
    $constructorString .= '/**'. PHP_EOL;

    foreach($entityAttributes as $attribute) {
        $name = convertFromUnderscoreToCamelCase($attribute->getEntityAttributeName());
        $constructorString .= ' * @param ' . $name. PHP_EOL;
    }

    $constructorString .= '*/'. PHP_EOL;
    $constructorString .= PHP_EOL;

    foreach($entityAttributes as $attribute) {

        $name = convertFromUnderscoreToCamelCase($attribute->getEntityAttributeName());
        $constructorString .= '   this.' . $name . ' = ' . $name . ';' . PHP_EOL;
    }

    $constructorString .= '}' . PHP_EOL;

    return $constructorString;
}

$entity1 = new entityAttribute('userId','Integer');
$entity2 = new entityAttribute('userName', 'String');
$entity3 = new entityAttribute('userEmail', 'String');


$testEntity = 'User';
$entityAttributes = array($entity1, $entity2, $entity3);
echo generateConstructor($entityAttributes, $testEntity);
