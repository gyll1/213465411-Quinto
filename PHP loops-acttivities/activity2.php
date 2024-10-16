<!-- Activity 2: Password Validator -->
<div>
    <h2>Activity 2: Password Validator</h2>
    <h3>Enter Password:</h3>
    <pre>
<?php
$correctPassword = "password123";
$inputPassword = "password123"; // For demonstration, replace with user input in real scenarios.
do {
    if ($inputPassword !== $correctPassword) {
        echo "Incorrect password.\n";
    }
} while ($inputPassword !== $correctPassword);
echo "Access Granted.";
?>
    </pre>
</div>
<hr>