<?php
$input = fgets(STDIN);
$myArray = array();

for ($letter = 0; $letter < strlen($input); $letter++) {
    if (!array_key_exists($input[$letter], $myArray)) {
        $myArray[$input[$letter]] = 0;
    }
    $myArray[$input[$letter]]++;
}
arsort($resultArr);
while (list($key, $val) = each($myArray)) {
    echo "$key -> $val" . "<\n";
}
?>