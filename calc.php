<?php
$numberA = $_POST["numberA"];
$numberB = $_POST["numberB"];
$oper = $_POST["oper"];

switch ($oper) {
    case "plus":
        $result = ("$numberA" + "$numberB");
        break;
    
    case "minus":
        $result = ("$numberA" - "$numberB");
        break;
    
    case "times":
        $result = ("$numberA" * "$numberB");
        break;
    
    case "divided":
        $result = ("$numberA" / "$numberB");
        break;
    
    default:
    $result = 0;        
}

