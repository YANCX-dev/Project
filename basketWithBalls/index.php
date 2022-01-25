<?php
require_once "App/Models/Ball.php";
require_once "App/Models/Box.php";

use App\Models\Box;
use App\Models\Ball;


$box = new Box();
$Ball1 = new Ball();
$Ball2 = new Ball();
$Ball3 = new Ball();
$Ball4 = new Ball();


function throwBall($box,$ball){
    $percent = rand(0,1);
    if($percent == 1){
        $box->putBall($ball);
        echo "Мяч в корзине!";
    }
    else{
        echo "Промах!Попробуй еще";
    }
}

throwBall($box,$Ball3);




