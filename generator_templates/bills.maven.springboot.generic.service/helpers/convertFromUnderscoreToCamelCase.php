<?php

function convertFromUnderscoreToCamelCase($string) {
    require_once('convertFirstLetterToUpperCase.php');
    $stringToConvert = explode("_", $string);
    $returnString = '' . $stringToConvert[0];

    $index = 0;
    foreach($stringToConvert as $word) {

        if($index > 0) {
            $wordLetters = str_split($word);
            $returnString .= '' . convertFirstLetterToUpperCase($wordLetters);
        }

        $index++;
    }
    return $returnString;
}

$test='this_database_table';
convertFromUnderscoreToCamelCase($test)
?>