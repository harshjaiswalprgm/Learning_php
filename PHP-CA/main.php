<!DOCTYPE html>
<html>
<head>
    <title>User Input Form</title>
</head>
<body>

    <!-- HTML Form to take user input -->
    <form method="POST" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="class">Class:</label>
        <input type="text" id="class" name="class" required><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    // Check if form data is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve input data
        $name = htmlspecialchars($_POST['name']);
        $class = htmlspecialchars($_POST['class']);

        // Display the input data
        echo "<h2>Submitted Information</h2>";
        echo "Name: " . $name . "<br>";
        echo "Class: " . $class . "<br>";
    }
    ?>

</body>
</html>
