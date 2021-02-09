<?php
function dozap() {
    global $val;
    $val = 212;
}

$val = 121;
dozap();
echo "DoZap = $val\n";
?>