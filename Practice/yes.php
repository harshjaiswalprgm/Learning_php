<?php
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

function addItem($itemName, $price) {
    $_SESSION['cart'][] = ['item' => $itemName, 'price' => $price];
}

function calculateTotal() {
    $total = 0;
    foreach ($_SESSION['cart'] as $item) {
        $total += $item['price'];
    }
    return $total;
}

function checkBudget($budget) {
    $total = calculateTotal();
    if ($total > $budget) {
        return "Total ($$total) exceeds your budget of $$budget!";
    } else {
        return "Total ($$total) is within your budget of $$budget.";
    }
}

if (isset($_POST['item']) && isset($_POST['price'])) {
    $item = $_POST['item'];
    $price = floatval($_POST['price']);
    addItem($item, $price);
}

// Clear cart
if (isset($_POST['clear_cart'])) {
    $_SESSION['cart'] = [];
}

// Set budget (example)
$budget = isset($_POST['budget']) ? floatval($_POST['budget']) : 100.0;
?>

    <!-- Form to add items -->
    <form method="POST">
        <label for="item">Item Name:</label>
        <input type="text" id="item" name="item" required>
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" required>
        <button type="submit">Add Item</button>
    </form>

    <hr>

    <!-- Display cart items -->
    <h2>Your Cart</h2>
    <ul>
        <?php
        if (!empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $item) {
                echo "<li>{$item['item']} - $ {$item['price']}</li>";
            }
        } else {
            echo "<li>Your cart is empty.</li>";
        }
        ?>
    </ul>

   