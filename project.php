<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $watchType = isset($_POST["watch-type"]) ? $_POST["watch-type"] : '';
        $quantity = isset($_POST["quantity"]) ? $_POST["quantity"] : '';
    }

        if ($watchType && $quantity) {
            echo "<p>Thank you for your order!</p>";
           
        }
    ?>
