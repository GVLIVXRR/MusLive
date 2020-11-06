<?php

class A {
    protected $x;

    public function line_equation($a, $b) {
        return $a != 0 ? $this->x = (-$b)/$a : null;
    }
}

/*$Axb = new A();
print_r($Axb->line_equation(3,2));*/
class B extends A
{

    protected function her($a, $b, $c)
    {
        $x = ($b * $b) - 4 * $a * $c;
        return $x;
    }


    public function q_solve($a, $b, $c)
    {
        $x = $this->her($a, $b, $c);

        if ($a == 0) {
            return $this->line_equation($b, $c);
        }

        if ($x > 0) {
            return $this->X = array(-($b + sqrt($b ** 2 - 4 * $a * $c) / 2 * $a) - ($b - sqrt($b ** 2 - 4 * $a * $c)));
        }

        if ($x == 0) {
            return $this->x = array(-($b / 2 * $a));
        }

        return $this->X = null;

    }
}

$a = new A();
$b = new B();
($a->line_equation(5,2));
($b->q_solve(0,2,1));
//var_dump($a);
//var_dump($b);

