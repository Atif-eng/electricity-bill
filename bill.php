<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill</title>
</head>
<body>

    <form method="POST" action="#">
        <label for="unit">Enter the number of units:</label>
        <input type="text" id="unit" name="unit">
        <input type="submit" value="Generate Total Bill">
    </form>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the number of units from the form
    $units = isset($_POST['unit']) ? intval($_POST['unit']) : 0;

    // Calculate the electricity bill based on conditions
    $bill = 0;

    if ($units <= 50) {
        $bill = $units * 3.50;
    } elseif ($units > 50 && $units <= 150) {
        $bill = $units * 4.00;
    } elseif ($units > 150 && $units <=250) {
        $bill = $units * 5.20;
    } else {
        $bill = $units * 6.50;
    }

    echo "<p>The electricity bill for $units units is Rs. $bill</p>";
}
?>
</body>
</html>


