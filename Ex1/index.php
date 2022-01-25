<?php

$firstNum = $_POST["firstNum"];
$secondNum = $_POST["secondNum"];
$sign = $_POST["sign"];

if(isset($_POST["submit"])){
    $firstNum1 = intval($firstNum);
    $secondNum1 = intval($secondNum);
    if($sign[0] == "-"){
        $result = $firstNum1 - $secondNum1;
    }
    elseif ($sign[0] =="+"){
        $result = $firstNum1 + $secondNum1;
    }
    elseif ($sign[0] =="/"){
        $result = $firstNum1 / $secondNum1;
    }
    elseif($sign[0] == "*"){
    $result = $firstNum1 * $secondNum1;
    }
}




























require_once $_SERVER["DOCUMENT_ROOT"] . "/index.view.php"
?>