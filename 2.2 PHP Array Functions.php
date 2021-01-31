<?php
$za = array();
$za["name"] = "Chuck";
$za["course"] = "WA4E";

// PHP >= 7.0.0 only
$name = $za['name'] ?? 'not found';
$addr = $za['addr'] ?? 'not found';

echo("Name=$name\n");
echo("Addr=$addr\n");

// PHP < 7.0.0 equivalent
$name = isset($za['name']) ? $za['name'] : 'not found';
?>
