<?php
/* returns string */
function removeTheFirstLetter($array) {
   $characters = array_slice($array, 1, count($array));
   $returnString = "";

   foreach ($characters as $letter) {
      $returnString = $returnString . $letter;
   }

   return $returnString;
}

$test = array("t","e","s","t");
echo removeThefirstLetter($test);
?>
