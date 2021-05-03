<?php

function generateRepositoryInterfaceForDomainClass($domainClass,
                                                   $domainPackageDir,
                                                   $domainIndexDataType,
                                                   $repositoryPackageDir,
                                                   $customQueries) {

$interfaceClassString = 'package '. $repositoryPackageDir . ';' . PHP_EOL;
$interfaceClassString .= PHP_EOL;
$interfaceClassString .= 'import org.springframework.data.jpa.repository.JpaRepository;' . PHP_EOL;
$interfaceClassString .= 'import org.springframework.data.repository.CrudRepository;' . PHP_EOL;
$interfaceClassString .= PHP_EOL;
$interfaceClassString .= 'import '. $domainPackageDir .'.'. $domainClass . ';'. PHP_EOL;
$interfaceClassString .= PHP_EOL;
$interfaceClassString .= 'public interface '.$domainClass .'Repository extends JpaRepository<'. $domainClass .', '. $domainIndexDataType .'>{'. PHP_EOL;
$interfaceClassString .= PHP_EOL;
$interfaceClassString .= PHP_EOL;
$interfaceClassString .= '/* Your custom queries go here. */'. PHP_EOL;
foreach($customQueries as $query) {
    $interfaceClassString .= '   '. $query . PHP_EOL;
}
$interfaceClassString .= '}'. PHP_EOL;

return $interfaceClassString;

}

$domainClass = 'ApplicationSettings';
$domainPackageDir = 'application.domain';
$domainIndexDataType = 'Integer';
$repositoryPackageDir = 'application.repository';

$query1 = '';
$query2 = '';
$query3 = '';
$query4 = '';

$customQueries = array($query1, $query2, $query3, $query4);
echo generateRepositoryInterfaceForDomainClass($domainClass, $domainPackageDir, $domainIndexDataType, $repositoryPackageDir, $customQueries);