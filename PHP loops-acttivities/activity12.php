<!-- Activity 12: Reverse a String -->
<div>
    <h2>Activity 12: Reverse a String</h2>
    <h3>Reversing "Hello":</h3>
    <pre>
<?php
$string = "Hello";
$reversedString = "";
for ($o = strlen($string) - 1; $o >= 0; $o--) {
    $reversedString .= $string[$o];
}
echo $reversedString;
?>
    </pre>
</div>

</body>
</html>