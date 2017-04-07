<?php
// Array with names
$a[] = "Apple";
$a[] = "Array";
$a[] = "Araman";
$a[] = "America";
$a[] = "Bat";
$a[] = "Badminton";
$a[] = "Bad";
$a[] = "Box";
$a[] = "Cat";
$a[] = "Camel";
$a[] = "Camera";
$a[] = "Chandan";
$a[] = "Chennai";
$a[] = "Dog";
$a[] = "Dhaka";
$a[] = "Donky";
$a[] = "Don";
$a[] = "Elephant";
$a[] = "Emirate";
$a[] = "Edit";
$a[] = "Example";
$a[] = "Fat";
$a[] = "Form";
$a[] = "Function";
$a[] = "Friction";
$a[] = "God";
$a[] = "Good";
$a[] = "Goat";
$a[] = "Gwaliyar";
$a[] = "Hen";
$a[] = "Hide";
$a[] = "House";
$a[] = "Home";
$a[] = "Ink";
$a[] = "Index";
$a[] = "Input";
$a[] = "Impact";
$a[] = "Jug";
$a[] = "June";
$a[] = "Jungal";
$a[] = "Junk";
$a[] = "Knife";
$a[] = "Know";
$a[] = "Knew";
$a[] = "Limb";
$a[] = "Link";
$a[] = "Language";
$a[] = "Monkey";
$a[] = "Monitor";
$a[] = "Macro";
$a[] = "Not";
$a[] = "nalanda";
$a[] = "Nik";
$a[] = "Opposite";
$a[] = "Ors";
$a[] = "Output";
$a[] = "Pik";
$a[] = "Put";
$a[] = "Plugin";
$a[] = "Question";
$a[] = "Queary";
$a[] = "Quize";
$a[] = "Rank";
$a[] = "Rebook";
$a[] = "rename";
$a[] = "Sit";
$a[] = "Search";
$a[] = "Sunday";
$a[] = "Tamato";
$a[] = "Ten";
$a[] = "Tempnam";
$a[] = "Umbrera";
$a[] = "Uasort";
$a[] = "URL";
$a[] = "Vickey";
$a[] = "Values";
$a[] = "Var_export";
$a[] = "Wonder";
$a[] = "Wddx_add_vars";
$a[] = "W32api_deftype";
$a[] = "X_mas";
$a[] = "Xml_error_string";
$a[] = "Xml_get_current_byte_index";
$a[] = "Yak";
$a[] = "Yellow";
$a[] = "Yes";
$a[] = "Zebra";


// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>