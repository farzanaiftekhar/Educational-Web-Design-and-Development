<?php
function countVowels($inputString) {
    // Convert the input string to lowercase for case-insensitive comparison.
    $inputString = strtolower($inputString);

    // Define a string containing all vowels.
    $vowels = "aeiou";

    // Initialize a counter for vowels.
    $vowelCount = 0;

    // Iterate through each character in the input string.
    for ($i = 0; $i < strlen($inputString); $i++) {
        $char = $inputString[$i];

        // Check if the character is a letter and a vowel.
        if (ctype_alpha($char) && strpos($vowels, $char) !== false) {
            $vowelCount++;
        }
    }

    return $vowelCount;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['input_string'])) {
        $inputString = $_POST['input_string'];
        $vowelCount = countVowels($inputString);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Count Vowels</title>
</head>
<body>
    <h2>Enter a string:</h2>
    <form method="post" action="">
        <input type="text" name="input_string" placeholder="Enter a string" required><br>
        <button type="submit">Count Vowels</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo "Number of vowels: " . $vowelCount;
    }
    ?>
</body>
</html>
