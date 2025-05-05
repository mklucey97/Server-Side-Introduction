<?php
/* ****************************************
 * STEP 1: INPUT: Do NOT process, just get the data.
 * Do not delete this comment.
 * ********************************************/

// Step 1: Input
$title = $_POST['title'];
$favdrink = $_POST['favdrink'];
$pname = $_POST['pname'];
$favfictionalplace = $_POST['favfictionalplace'];
$favrealplace = $_POST['favrealplace'];

// If the data is not present, initialize variables to empty
if (!isset($title)) $title = "";
if (!isset($favdrink)) $favdrink = "";
if (!isset($pname)) $pname = "";
if (!isset($favfictionalplace)) $favfictionalplace = "";
if (!isset($favrealplace)) $favrealplace = "";




?>