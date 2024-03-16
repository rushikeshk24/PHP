<link rel="stylesheet" href="styles.css">
<?php

// Database connection
$conn = mysqli_connect("localhost", "root", "", "hospital");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Adding appointment
$patient_id = $_POST['patient_id'];
$date = $_POST['date'];

$sql = "INSERT INTO appointments (patient_id, date) VALUES ('$patient_id', '$date')";

if (mysqli_query($conn, $sql)) {
    echo "Appointment added successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    
}

mysqli_close($conn);
?>
