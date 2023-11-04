<?php
function sumOfEvenNumbers($arr) {
    $sum = 0;
    foreach ($arr as $number) {
        if ($number % 2 === 0) {
            $sum += $number;
        }
    }
    return $sum;
}

$evenSum = 0; // Initialize the variable to hold the sum.

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['numbers'])) {
        $inputNumbers = $_POST['numbers'];
        // Split the input string into an array using commas as the delimiter.
        $numbersArray = array_map('intval', explode(',', $inputNumbers));
        $evenSum = sumOfEvenNumbers($numbersArray);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sum of Even Numbers</title>
</head>
<body>
    <h2>Enter a list of numbers (comma-separated):</h2>
    <form method="post" action="">
        <input type="text" name="numbers" placeholder="e.g., 2,4,6,8" required><br>
        <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo "Sum of even numbers: " . $evenSum;
    }
    ?>
</body>
</html>
