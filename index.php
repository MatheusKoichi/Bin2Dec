<?php

$html = file_get_contents("main.html");
echo $html;

@$binaryId = ((int)$_POST["binary"]);

$convert = bindec($binaryId);

echo "<input id='decimalResult'value='Resultado: $convert' readonly='readonly' placeholder='resultado' width='300px'\>";





