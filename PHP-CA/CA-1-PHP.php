<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discount Calculator</title>
</head>
<body style="background-color: #0001;">
    <h1>Savings Analyzer-(Discount Calculator)</h1>
    
    <!-- Form to enter total cart value -->
    <form method="post">
        <label for="totalCartValue">Enter Total Cart Value ($): </label>
        <input type="number" step="0.01" id="totalCartValue" name="totalCartValue" required>
        <input type="submit" value="Calculate Discount">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        //user input
        
        $totalCartValue = $_POST['totalCartValue'];
        function CalFinlPrse($totalCartValue) {
            $discount = 0;
            // Check for discounts
            if ($totalCartValue > 200) {
                $discount = 20;
            } elseif ($totalCartValue > 100) {
                $discount = 10;
            }

            // Calculate discounted price
            $finalPrice = $totalCartValue - ($totalCartValue * ($discount / 100));

            return [
                'originalTotal' => $totalCartValue,
                'discount' => $discount,
                'finalPrice' => $finalPrice
            ];
        }

        // Calculate the final price
        $result = CalFinlPrse($totalCartValue);

        // Display the results
        echo "<h2>Result:</h2>";
        echo "Original Total: $" . number_format($result['originalTotal'], 2) . "<br>";
        echo "Discount Applied: " . $result['discount'] . "%<br>";
        echo "Final Price: $" . number_format($result['finalPrice'], 2);
    }
    ?>

</body>
</html>
