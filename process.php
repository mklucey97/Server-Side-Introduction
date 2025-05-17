<!----------------------
Name: Mary Lucey
Date: 4-27-25
Assignment 3: Server Side Introduction
-------------------------->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Your Key Words Here">
  <meta name="description" content="Your Description Here">
  <title>Title Result</title>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>

<?php
// STEP 1: INPUT
$title = $_POST['title'] ?? "";
$favdrink = $_POST['favdrink'] ?? "";
$pname = $_POST['pname'] ?? "";
$favfictionalplace = $_POST['favfictionalplace'] ?? "";
$favrealplace = $_POST['favrealplace'] ?? "";

// STEP 2: VALIDATION & CLEANING
$title = substr(strip_tags(trim($title)), 0, 64);
$favdrink = substr(strip_tags(trim($favdrink)), 0, 64);
$pname = substr(strip_tags(trim($pname)), 0, 64);
$favfictionalplace = substr(strip_tags(trim($favfictionalplace)), 0, 64);
$favrealplace = substr(strip_tags(trim($favrealplace)), 0, 64);

// STEP 3 & 4: PROCESSING & OUTPUT
if ($title && $favdrink && $pname && $favfictionalplace && $favrealplace) {
    $fullTitle = "$title $favdrink $pname of $favfictionalplace and $favrealplace";

    $lenTitle = strlen($title);
    $lenDrink = strlen($favdrink);
    $lenPet = strlen($pname);
    $lenFictional = strlen($favfictionalplace);
    $lenReal = strlen($favrealplace);
    $lenFull = strlen($fullTitle);

    echo "<h1>You are $fullTitle</h1>";
    echo "<p>$title is $lenTitle characters</p>";
    echo "<p>$favdrink is $lenDrink characters</p>";
    echo "<p>$pname is $lenPet characters</p>";
    echo "<p>$favfictionalplace is $lenFictional characters</p>";
    echo "<p>$favrealplace is $lenReal characters</p>";
    echo "<p>Your whole title is $lenFull characters!</p>";

    if ($lenFull >= 30) {
        echo "<p>That's a heck of a title!</p>";
    } else {
        echo "<p>That's a cute little title.</p>";
    }
} else {
    echo "<p>I'm sorry, your input was not valid.</p>";
    echo '<img src="images/mickeymouse.jpg" alt="Mickey Mouse">';
    echo '<br><a href="index.html">Try Again</a>';
}
?>

</body>
</html>
