<?php
/* returns string */
function convertFirstLetterToUpperCase($array) {
   $firstCharacter = "$array[0]";
   $firstCharacter = strtoupper($firstCharacter);
   $endOfWord = array_slice($array, 1, count($array));

   $returnString = "$firstCharacter";

   $index = 0;
   foreach ($array as $letter) {
      if($index !=0) {
         $returnString = "$returnString" . "$letter";
      }
      $index++;
   }

   return $returnString;
}

$test = array("t","e","s","t");
convertFirstLetterToUpperCase($test);
?>
