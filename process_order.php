<?php
// Ei check ta nishchit kore je shudhu form theke (POST method) data esheche
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // --- Data Dhorar Jonno Coding (Backend Logic) ---
    $customer_name = $_POST['name'];
    $customer_phone = $_POST['phone'];
    $delivery_address = $_POST['address'];
    $payment_method = $_POST['payment'];

    // 🚨 Action: Ekhanei mail() function diye apnar email-e data pathano hobe
    // mail("apnar_email@example.com", "NEW ORDER", "Customer: " . $customer_name . "..."); 

    // --- Customer-ke Thank You page-e pathiye din ---
    header("Location: thank_you.html");
    exit;
    
} else {
    // Jodi keu URL type kore direct aste chay (GET request), tahole take home page-e pathiye din
    header("Location: index.html");
    exit;
}
?>