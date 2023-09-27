<?php
function generatePassword($length) {
    $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numberChars = '0123456789';
    $specialChars = '!@#$%^&*()_+';
    $allChars = $lowercaseChars . $uppercaseChars . $numberChars . $specialChars;
    $totalChars = strlen($allChars);
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $randomChar = $allChars[rand(0, $totalChars - 1)];
        $password .= $randomChar;
    }

    return $password;
}

$password = generatePassword(12);

echo $password;
?>
