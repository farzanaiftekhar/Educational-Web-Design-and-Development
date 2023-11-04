<?php
$db = mysqli_connect('localhost', 'root', '', 'office');
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
