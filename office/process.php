<?php
// Check if the form is submitted.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user input from the form.
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Validate user input (you can add more validation as needed).
    if (empty($name) || empty($email)) {
        echo "Name and email are required fields.";
    } else {
        // Connect to the MySQL database.
        $db = new mysqli("localhost", "username", "password", "office");

        // Check for database connection errors.
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }

        // Insert the user's information into the "users" table.
        $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

        if ($db->query($sql) === true) {
            echo "User information has been successfully saved.";
        } else {
            echo "Error: " . $sql . "<br>" . $db->error;
        }

        // Close the database connection.
        $db->close();
    }
}
?>
