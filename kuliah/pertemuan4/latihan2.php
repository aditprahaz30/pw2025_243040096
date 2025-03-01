<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>looping</title>
    <style>
        .kotak{
            width: 30px;
            height: 30px;
            text-align: center;
            line-height: 30px;
            background-color: crimson;
            font-size: 0.8em;
            display: inline-block;
        }
    </style>
</head>
<body>
<?php
for ($i = 10; $i >= 1; $i--) {
    echo "Hello World $i x <br>";
}
echo"<hr>";

for ($i = 1; $i <= 10; $i++) {
    echo "Hello World $i x <br>";
}?>
</body>
</html>