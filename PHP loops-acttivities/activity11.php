<!-- Activity 11: Fibonacci Sequence -->
<div>
    <h2>Activity 11: Fibonacci Sequence</h2>
    <pre>
<?php
$fib1 = 0;
$fib2 = 1;
echo "$fib1 $fib2 ";
$count = 2;

while ($count < 10) {
    $nextFib = $fib1 + $fib2;
    echo "$nextFib ";
    $fib1 = $fib2;
    $fib2 = $nextFib;
    $count++;
}
?>
    </pre>
</div>
<hr>