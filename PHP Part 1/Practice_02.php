<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice_02: Array of Fruits</title>
</head>
<body>
    <h2>List of Fruits</h2>
    
    <?php
    $fruits = array("Apple", "Banana", "Cherry", "Mango", "Orange");
    echo "<ol>";
        for ($i = 0; $i < count($fruits); $i++) {
            echo "<li>" . $fruits[$i] . "</li>";
        }
    echo "</ol>";
    ?>
</body>
</html>