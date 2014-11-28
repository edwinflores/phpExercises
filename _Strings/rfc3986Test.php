<?php
$name = "Sample String";
$output = rawurlencode($name);
echo "Encoded: \n";
echo "http://localhost/{$output}" . "\n";

echo "Decoded: \n";
echo  rawurldecode($output) . "\n";
?>
