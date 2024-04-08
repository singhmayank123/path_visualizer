<?php
// Initialize libcurl
$curl = curl_init();

// Set the website URL to connect to
$url = "https://www.linkedin.com/in/svontheweb/";

// Set curl options
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Execute the request
$response = curl_exec($curl);


// Check for any errors
if ($response === false) {
    $error = curl_error($curl);
    // Handle the error appropriately
    // For example, you can log the error or display an error message
    echo "Error: " . $error;
}

// Close the connection
curl_close($curl);

// Process the response as needed
?>
