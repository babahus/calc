<?php

error_reporting(E_ERROR);
/*check post request and make math*/
if (isset($_POST['submit'])) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    if (!isset($_POST['number2']) && $_POST['operation'] === 'radical'
        or isset($_POST['number2']) && $_POST['operation'] === 'radical') {
        $result = sqrt($number1);
        echo $result;
    } elseif ($_POST['operation'] === 'plus') {
        $result = $number1 + $number2;
        echo $result;
    } elseif ($_POST['operation'] === 'minus') {
        $result = $number1 - $number2;
        echo $result;
    } elseif ($_POST['operation'] === 'multiply') {
        $result = $number1 * $number2;
        echo $result;
    } elseif ($_POST['operation'] === 'scrt') {
        $result = $number1 ** $number2;
        echo $result;
    } elseif ($_POST['operation'] === 'divide' && $number2 != '0') {
        $result = $number1 / $number2;
        echo $result;
    } else {
        echo "Bad operation";
    }
}




