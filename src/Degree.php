<?php


namespace Ahillel\Math;


class Degree
{
    public function pow($a, int $b)
    {
        if ($b === 1)
            return $a;

        return $a * $this->pow($a, $b - 1);
    }
}