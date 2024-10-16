<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loop Activities</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.6;
        }
        pre {
            background: #f4f4f4;
            padding: 10px;
            border-radius: 5px;
            overflow-x: auto;
        }
        hr {
            margin: 20px 0;
        }
    </style>
</head>
<body>

<h1>PHP Loop Activities</h1>

<!-- Activity 1: Number Counter -->
<div>
    <h2>Activity 1: Number Counter</h2>
    <h3>1 to 10:</h3>
    <pre>
<?php
$i = 1;
while ($i <= 10) {
    echo $i . " ";
    $i++;
}
?>
    </pre>

    <h3>Even numbers from 1 to 20:</h3>
    <pre>
<?php
$i = 2;
while ($i <= 20) {
    echo $i . " ";
    $i += 2;
}
?>
    </pre>
</div>
<hr>
