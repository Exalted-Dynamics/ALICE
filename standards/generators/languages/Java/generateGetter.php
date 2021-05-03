<?php

function generateGetter($name, $dataType) {
   require_once('convertFirstLetterToUpperCase.php');
   $array = str_split($name);
   print_r($array);
   $getterString = "public " . $dataType . " get" . convertFirstLetterToUpperCase($array) . " () ".  "{ \n " .
   "     return " . $name .                                                                          "; \n" .
   "} " .                                                                                            "  \n" ;

return $getterString;
}

echo generateGetter("test", "String");
?>
