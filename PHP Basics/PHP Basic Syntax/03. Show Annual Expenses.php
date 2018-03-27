<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03. Show Annual Expenses</title>
</head>
<body>
<form action="" method="get">
    Enter number of years:
    <input type="number" required name="years">
    <input type="submit" value="Show costs">
</form>

<?php
if (isset($_GET['years']) && !empty($_GET['years'])) {
    $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'November', 'December'];
    $count = $_GET['years'];
}
?>

<?php if (isset($_GET['years']) && !empty($_GET['years'])): ?>

    <table border="1">
        <thead>
        <th>Years</th>
        <?php foreach ($months as $month): ?>
            <th><?= $month; ?></th>
        <?php endforeach; ?>
        <th>Total:</th>

        </thead>
        <tbody>
        <?php for ($i = 2018; $i > 2018 - $count; $i--) {
            echo "<tr><td>$i</td>";
            $total = 0;
            foreach ($mounths as $month) {
                $random = rand(0, 1000);
                $total += $random;
                echo "<td>{$random}</td>";
            }
            echo "<td>{$total}</td>";
            echo "</tr>";
        } ?>
        </tbody>
    </table>

<?php endif; ?>
</body>
</html>