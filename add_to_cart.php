<?php
session_start();

if (isset($_POST['product_id']) && isset($_POST['quantity'])) {
    $product_id = $_POST['product_id'];
    $quantity = (int)$_POST['quantity'];

    // Validate product ID and quantity if needed

    // Retrieve product details from the database based on the product ID

    // Example code to retrieve product details from the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "icecream";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT * FROM cart WHERE id = $product_id";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();

        // Create an item array to store in the cart
        $item = array(
            'id' => $product['id'],
            'name' => $product['name'],
            'price' => $product['price'],
            'quantity' => $quantity
        );

        // Add the item to the cart session variable
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }
        $_SESSION['cart'][] = $item;

        // You can also store the cart in the database if needed

        // Close the database connection
        $conn->close();

        // Send a success response
        echo "Product added to cart successfully.";
        exit;
    } else {
        // Close the database connection
        $conn->close();

        // Send an error response
        echo "Invalid product ID.";
        exit;
    }
}

// Send an error response if the required parameters are not provided
echo "Invalid request.";
exit;
?>
