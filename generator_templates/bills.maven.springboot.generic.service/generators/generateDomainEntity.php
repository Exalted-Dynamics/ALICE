<?php
require_once('../objects/entityAttribute.php');

function generateDomainEntity($entityName, $entityDataType)
{
    require_once('../helpers/convertFromUnderscoreToCamelCase.php');

    $domainEntity = '@Column(name="' . $entityName . '")' . PHP_EOL;
    $domainEntity .= 'private '. $entityDataType . ' '. convertFromUnderscoreToCamelCase($entityName) . ';' . PHP_EOL;

    return $domainEntity;
}

$entity="test_data_column";
$dataType = 'String';
generateDomainEntity($entity, $dataType);

$entity1 = new entityAttribute('user_id','Integer');
$entity2 = new entityAttribute('user_name', 'String');
$entity3 = new entityAttribute('user_email', 'String');

$entities = array($entity1, $entity2, $entity3);
foreach($entities as $entity) {
    echo generateDomainEntity($entity->getEntityAttributeName(), $entity->getEntityAttributeDataType());
}

?>