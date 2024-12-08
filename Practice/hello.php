<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Default username for XAMPP/WAMP
$password = "";     // Leave blank for XAMPP/WAMP
$database = "school";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch records from students table
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1' style='border-collapse: collapse; width: 50%; margin: auto; text-align: left;'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
            </tr>";
    // Output data for each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['age']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}

// Close connection
$conn->close();
?>
