<?php
// PHP Associative Array
$albums = [
    "Dark Side of the Moon" => rand(1, 10),
    "Thriller" => rand(1, 10),
    "Back in Black" => rand(1, 10),
    "The Joshua Tree" => rand(1, 10),
    "Nevermind" => rand(1, 10)
];

$albums["Abbey Road"] = 10;

$heading = "Favorite Albums";
$pageContent = "<h1>$heading</h1>";

$pageContent .= "<select name='albums'>";
foreach ($albums as $title => $rating) {
    $pageContent .= "<option value='$rating'>$title</option>";
}
$pageContent .= "</select>";

// PHP Multidimensional Array
$artists = [
    "The Beatles" => [
        "A Hard Day's Night" => 1964,
        "Help!" => 1965,
        "Rubber Soul" => 1965,
        "Abbey Road" => 1969
    ],
    "Led Zeppelin" => [
        "Led Zeppelin IV" => 1971
    ],
    "Rolling Stones" => [
        "Let It Bleed" => 1969,
        "Sticky Fingers" => 1971
    ],
    "The Who" => [
        "Tommy" => 1969,
        "Quadrophenia" => 1973,
        "The Who by Numbers" => 1975
    ]
];

$pageContent .= "<p>Release date for Tommy by The Who: {$artists['The Who']['Tommy']}</p>";

$pageContent .= "<h2>Artists and Albums</h2><ul>";
foreach ($artists as $artist => $albums) {
    foreach ($albums as $album => $year) {
        $pageContent .= "<li>$artist - $album</li>";
    }
}
$pageContent .= "</ul>";

$pageContent .= "<h2>The Who Albums and Release Dates</h2><ul>";
foreach ($artists['The Who'] as $album => $year) {
    $pageContent .= "<li>$album - $year</li>";
}
$pageContent .= "</ul>";

$pageContent .= "<h2>Albums Released After 1970</h2><ul>";
foreach ($artists as $artist => $albums) {
    foreach ($albums as $album => $year) {
        if ($year > 1970) {
            $pageContent .= "<li>$artist - $album ($year)</li>";
        }
    }
}
$pageContent .= "</ul>";

echo $pageContent;
?>