<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add patient</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
<body>
<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "hospital");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetching patients
$sql = "SELECT * FROM patients";
$result = mysqli_query($conn, $sql);

echo "<h1>Patients</h1>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Name</th><th>Age</th><th>Gender</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['age']."</td><td>".$row['gender']."</td></tr>";
}
echo "</table>";

mysqli_close($conn);
?>

</body>
</html><link rel="stylesheet" href="styles.css">

