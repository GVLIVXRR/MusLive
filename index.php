<?php
use abramchuk\MyLog;
require_once "core\EquationInterface.php";
require_once "core\LogInterface.php";
require_once "core\LogAbstract.php";
require_once "abramchuk\Linear.php";
require_once "abramchuk\Quadratic.php";
require_once "abramchuk\MyLog.php";
require_once "abramchuk\AbramchukException.php";

ini_set("display_errors", 1);
error_reporting(-1);


try {
    $dirLog = "log\\";
    if (!file_exists($dirLog))
    {
        mkdir($dirLog, 0700);
    }
    $fileOpen = fopen("version", "r");
    MyLog::log("Version program: " . fgets($fileOpen));
    fclose($fileOpen);
    $b = new abramchuk\Quadratic();
    $values = array();

    for ($i = 1; $i < 4; $i++) {
    echo "Введите " . $i . " число: ";
    $values[] = readline();
        }
    $va = $values[0];
    $vb = $values[1];
    $vc = $values[2];

    MyLog::log("Введено уравнение " . $va . "x^2 + " . $vb . "x + " . $vc);
    $x = $b->solve($va, $vb, $vc);

    $str = implode(" . ", $x);
    MyLog::log("Корни уравнения: " . $str);
}
catch (abramchuk\AbramchukException $e) {
    MyLog::log($e->getMessage());
}

MyLog::write();

