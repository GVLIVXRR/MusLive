<?php
namespace abramchuk;
use core\EquationInterface;

class Quadratic extends Linear implements EquationInterface
{

    protected function disk($a, $b, $c)
    {
        $x = ($b * $b) - 4 * $a * $c;
        return $x;
    }


    public function solve($a, $b, $c)
    {
        $x = $this->disk($a, $b, $c);

        if ($a == 0) {
            return $this->line_equation($b, $c);
        }
        MyLog::log("Определено что это квадратное уравнение");
        if ($x > 0) {
            return $this->x = array(-($b + sqrt($b ** 2 - 4 * $a * $c) / 2 * $a) - ($b - sqrt($b ** 2 - 4 * $a * $c)));
        }

        if ($x == 0) {
            return $this->x = array(-($b / 2 * $a));
        }

        
        //return $this->x = null;

    }
}
