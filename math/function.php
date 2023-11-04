<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>
    <h2>Calculator</h2>
    <form method="post" action="">
        <label for="num1">Enter the first number:</label>
        <input type="number" name="num1" required><br>
        <label for="num2">Enter the second number:</label>
        <input type="number" name="num2" required><br>
        <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        // Calculate the results.
        $sum = $num1 + $num2;
        $difference = $num1 - $num2;
        $product = $num1 * $num2;
        $quotient = ($num2 != 0) ? $num1 / $num2 : "Undefined (division by zero)";

        echo "<h3>Results:</h3>";
        echo "Sum: $sum<br>";
        echo "Difference: $difference<br>";
        echo "Product: $product<br>";
        echo "Quotient: $quotient";
    }
    ?>
</body>
</html>
