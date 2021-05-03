<?php

function generateSetter($name, $dataType) {
    require_once('../helpers/convertFirstLetterToUpperCase.php');
    $array = str_split($name);
    print_r($array);
    $getterString = "public " . $dataType . " set" . convertFirstLetterToUpperCase($array) . " (" .
        $dataType . ", " . $name . ") ".                                                                 "{ \n " .
        "     this." . $name . "=" . $name .                                                             "; \n" .
        "} " .                                                                                            "  \n" ;

    return $getterString;
}

echo generateSetter("test", "String");
?>