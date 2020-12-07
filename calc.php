<?php

error_reporting(E_ERROR);
session_start();
/*check post request and make math*/
if (isset($_POST['submit'])) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    if (is_numeric($number1) && is_numeric($number2)) {
        if ($_POST['operation'] === 'radical') {
            $result = sqrt($number1);
            setcookie("result", $result);
            header('Location: http://localhost:63342/calc/index.php');
        } elseif ($_POST['operation'] === 'plus') {
            $result = $number1 + $number2;
            setcookie("result", $result);
            header('Location: http://localhost:63342/calc/index.php');
        } elseif ($_POST['operation'] === 'minus') {
            $result = $number1 - $number2;
            setcookie("result", $result);
            header('Location: http://localhost:63342/calc/index.php');
        } elseif ($_POST['operation'] === 'multiply') {
            $result = $number1 * $number2;
            setcookie("result", $result);
            header('Location: http://localhost:63342/calc/index.php');
        } elseif ($_POST['operation'] === 'scrt') {
            $result = $number1 ** $number2;
            setcookie("result", $result);
            header('Location: http://localhost:63342/calc/index.php');
        } elseif ($_POST['operation'] === 'divide' && $number2 != 0) {
            $result = $number1 / $number2;
            setcookie("result", $result);
            header('Location: http://localhost:63342/calc/index.php');
        }
    } else {
        echo "Needs numbers";
    }
}



