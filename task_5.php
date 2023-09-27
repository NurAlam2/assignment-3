<?php
function generatePassword($length) {
    // Define characters to include in the password
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    // Combine all characters into one string
    $allCharacters = $lowercase . $uppercase . $numbers . $specialChars;

    // Initialize the password variable
    $password = '';

    // Generate the password
    for ($i = 0; $i < $length; $i++) {
        // Get a random character from the combined character string
        $randomChar = $allCharacters[rand(0, strlen($allCharacters) - 1)];

        // Add the random character to the password
        $password .= $randomChar;
    }

    return $password;
}

// Generate a password with a length of 12 characters
$generatedPassword = generatePassword(12);

// Print the generated password
echo $generatedPassword;
?>
