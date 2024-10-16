<!-- Activity 10: Prime Number Checker -->
<div>
    <h2>Activity 10: Prime Number Checker</h2>
    <h3>Check if 17 is prime:</h3>
    <pre>
<?php
$number = 17;
$isPrime = true;

for ($n = 2; $n <= sqrt($number); $n++) {
    if ($number % $n == 0) {
        $isPrime = false;
        break;
    }
}
echo "$number is " . ($isPrime ? "a prime number." : "not a prime number.");
?>
    </pre>
</div>
<hr>