<?php

namespace abramchuk;
class Linear
{
    protected $x;

    public function line_equation($a, $b)
    {
        if ($a == 0) {
            
        }
        MyLog::log("Определено что это линейное уравнение");
        return $this->x = array(-($b / $a));
    }

}
