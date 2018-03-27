<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05. Sum of Digits</title>
</head>
<body>
<form action="" method="Get">
    <label>Input string:</label>
    <input type="text" name="string" required>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_GET['string']) && !empty(trim($_GET['string']))) {
    $array = $_GET['string'];
    $num = explode(', ', $array);
    echo "<table border='1'><tbody>";
    foreach ($num as $number) {
        echo "<tr><td>";
        echo $number . "<td>";
        if (is_numeric($number)) {
            echo $total = array_sum(str_split($number));
        } else {
            echo "I cannot sum that";
        }
        echo '</td></td></tr>';
    }
    echo "</tbody></table>";
}
?>
</body>
</html>