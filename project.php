<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $watchType = isset($_POST["watch-type"]) ? $_POST["watch-type"] : '';
        $quantity = isset($_POST["quantity"]) ? $_POST["quantity"] : '';
    }
        // Process the order, save to a database, etc.
        // In a real-world scenario, you would perform more robust validation and store data securely.

        if ($watchType && $quantity) {
            echo "<p>Thank you for your order!</p>";
           
        }
    ?>