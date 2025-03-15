<?php
$hardware = ["Motherboard", "Processor", "Hard Disk", "PC Cooler", "VGA Card", "SSD"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4b</title>
</head>
<body>
    <?php
    echo "<h3>Macam-macam perangkat keras komputer</h3>";
    echo "<ol>";
    foreach ($hardware as $item) {
        echo "<li>" . $item . "</li>";
    }
    echo "</ol>";

    $hardware[] = "Card Reader";
    $hardware[] = "Modem";

    sort($hardware);

    echo "<h3>Macam-macam perangkat keras komputer</h3>";
    echo "<ol>";
    foreach ($hardware as $item) {
        echo "<li>" . $item . "</li>";
    }
    "</ol>";
    ?>
</body>
</html>