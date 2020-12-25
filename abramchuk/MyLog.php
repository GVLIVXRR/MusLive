<?php

namespace abramchuk;

use core\LogAbstract;
use core\LogInterface;

class MyLog extends LogAbstract implements LogInterface
{
    public static function log($str)
    {
        self::Instance()->log[] = $str;
    }
    public static function write()
    {
        self::Instance()->_write();
    }
    public function _write()
    {
        $dateLog = date('d.m.Y_H.i.s.v');
        foreach ($this->log as $e)
        {
            echo $e . "\n\r";
            file_put_contents(__DIR__ . "\..\log\\$dateLog.log", $e . PHP_EOL, FILE_APPEND);
        }
        echo "\n\rLog: $dateLog";
    }
}