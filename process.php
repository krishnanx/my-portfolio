<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userInput = $_POST["userInput"];
    
    // Open a text file for writing (create it if it doesn't exist)
    $file = fopen("user_input.txt", "a");
    
    if ($file) {
        // Write the user's input to the file
        fwrite($file, $userInput . "\n");
        fclose($file);
        echo "Text saved successfully.";
    } else {
        echo "Error: Unable to save text.";
    }
}
?>
