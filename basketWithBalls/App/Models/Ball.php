<?php

namespace App\Models;

class Ball
{
    public static int $count = 0;

    public function __construct()
    {
        echo "Всего мячей:".(++self::$count)."(шт)<br>";
    }
}