<?php
// Array with names
$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";

//get the q parameter form URL

$q = $_REQUEST["q"];

$hint = "";

//lookup all hints form array if $q is different form ""
if($q !== ""){
    $q = strtolower($q);
    $len = strlen($q);
    foreach($a as $name){
        if(stristr($q, substr($name, 0, $len))){
            if($hint === ""){
                $hint = $name;
            }else{
                $hint .= ", $name";
            }
        }
    }
}
echo $hint === "" ? "no suggestion" : $hint;