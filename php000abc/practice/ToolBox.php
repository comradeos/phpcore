<?php

class Tools
{
    public static function Line(int $len = 10): void
    {
        for($i=0; $i<$len; ++$i)
        {
            echo "-";
        }
        echo "\n";
    }
}