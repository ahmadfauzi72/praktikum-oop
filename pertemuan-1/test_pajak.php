<?php
require "pajak.php";
$pajakObj = new pajak(0.11);
echo $pajakObj->hitungTotal(100000) . "\n";
echo $pajakObj->hitungTotal(200000) . "\n";
echo $pajakObj->hitungTotal(50000) . "\n";