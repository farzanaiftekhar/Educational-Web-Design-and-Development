<!DOCTYPE html>
<html>
<head>
    <title>Array Operations</title>
</head>
<body>
    <h2>Enter numbers to perform operations:</h2>
    <form method="post" action="">
        <label for="numbers">Enter numbers (comma-separated):</label>
        <input type="text" name="numbers" required><br>
        <button type="submit">Perform Operations</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['numbers'])) {
            $userInput = $_POST['numbers'];

            // Split the user input into an array using a comma as the delimiter.
            $numbers = array_map('intval', explode(',', $userInput));

            // i. Print the first element of the array.
            echo "i. First element of the array: " . $numbers[0] . "<br>";

            // ii. Print the last element of the array.
            $lastIndex = count($numbers) - 1;
            echo "ii. Last element of the array: " . $numbers[$lastIndex] . "<br>";

            // iii. Add a new element with the value of 12 to the end of the array.
            $numbers[] = 12;
            echo "iii. Added 12 to the end of the array. Updated array: " . implode(', ', $numbers) . "<br>";

            // iv. Calculate the sum of all the elements in the array and print the result.
            $sum = array_sum($numbers);
            echo "iv. Sum of all elements in the array: " . $sum;
        }
    }
    ?>
</body>
</html>
