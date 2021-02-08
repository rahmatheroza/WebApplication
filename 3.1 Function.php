<?php
function double(&$arg1) {
    $arg1 = $arg1 * 2;
    return $arg1;
}

$val = 10;
$dval = double($val);
echo "Value = $val Doubled = $dval\n";
?>