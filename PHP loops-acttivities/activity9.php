<!-- Activity 9: FizzBuzz Challenge -->
<div>
    <h2>Activity 9: FizzBuzz Challenge</h2>
    <pre>
<?php
for ($n = 1; $n <= 50; $n++) {
    if ($n % 3 == 0 && $n % 5 == 0) {
        echo "FizzBuzz ";
    } elseif ($n % 3 == 0) {
        echo "Fizz ";
    } elseif ($n % 5 == 0) {
        echo "Buzz ";
    } else {
        echo $n . " ";
    }
}
?>
    </pre>
</div>
<hr>