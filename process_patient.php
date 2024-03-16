<link rel="stylesheet" href="styles.css">
<?php

// Database connection
$conn = mysqli_connect("localhost", "root", "", "hospital");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Adding patient
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];

$sql = "INSERT INTO patients (name, age, gender) VALUES ('$name', '$age', '$gender')";

if (mysqli_query($conn, $sql)) {
    echo "Patient added successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
