<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice_03: Array of Even Numbers</title>
</head>
<body>
    <h2>List of Even Numbers</h2>

    <?php
    $matrix = [
        [12, 23, 34],
        [45, 55, 62],
        [71, 84, 90]
    ];
    
    echo "<ul>";
    $i = 0;
    while ($i < count($matrix)) {
        $x = 0;
        while ($x < count($matrix[$i])) {
            if ($matrix[$i][$x] % 2 == 0) {
                echo "<li>" . $matrix[$i][$x] . "</li>";
            }
            $x++;
        }
        $i++;
    }
    echo "</ul>";
    ?>
</body>
</html>