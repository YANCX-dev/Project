<?php

namespace App\Models;

use App\Models\Ball;

class Box
{
    public array $basket = [];
    public function putBall(Ball $ball)
    {
        $this->basket[] = $ball;
    }

}