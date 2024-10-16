<!-- Activity 4: Loop Control with break and continue -->
<div>
    <h2>Activity 4: Loop Control with break and continue</h2>
    <pre>
<?php
for ($k = 1; $k <= 10; $k++) {
    if ($k == 5) {
        continue; // Skip number 5
    }
    if ($k == 9) {
        break; // Stop the loop at 8
    }
    echo $k . " ";
}
?>
    </pre>
</div>
<hr>