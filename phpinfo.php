<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Assignment</title>
</head>
<body>
    <h1>Welcome to My PHP Page</h1>
    
    <?php
    // Introduction
    echo "<p>Hello! My name is John Doe, and I'm taking this PHP class to enhance my web development skills. I'm excited to learn about server-side programming and create dynamic websites.</p>";

    // Favorite quote
    $favorite_quote = "The only way to do great work is to love what you do. - Steve Jobs";
    echo "<p>My favorite quote: $favorite_quote</p>";

    // Brookhaven College address variables
    $college_name = "Brookhaven College";
    $address = "3939 Valley View Lane";
    $city = "Farmers Branch";
    $state = "TX";
    $postal_code = "75244";

    // Create and display address block using concatenation
    $address_block = $college_name . "<br>" . $address . "<br>" . $city . ", " . $state . " " . $postal_code;
    echo "<h2>College Address:</h2>";
    echo "<p>$address_block</p>";

    // Arithmetic operations
    $x = 15;
    $y = 4;

    echo "<h2>Arithmetic Operations:</h2>";
    echo "x = $x, y = $y<br>";
    echo "x + y = " . ($x + $y) . "<br>";
    echo "x - y = " . ($x - $y) . "<br>";
    echo "x * y = " . ($x * $y) . "<br>";
    echo "x / y = " . ($x / $y) . "<br>";
    echo "x % y = " . ($x % $y) . "<br>";

    // Define and display constant
    define("MY_NAME", "John Doe");
    echo "<h2>My Name (Constant):</h2>";
    echo "<p>" . MY_NAME . "</p>";

    // Display current script filename using superglobal
    echo "<h2>Current Script:</h2>";
    echo "<p>" . $_SERVER['PHP_SELF'] . "</p>";
    ?>

</body>
</html>
