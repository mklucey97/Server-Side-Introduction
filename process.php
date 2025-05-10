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

/************************************
 * STEP 2: VALIDATION: Always Clean your input first!!!
 * DO NOT process, only CLEAN and VALIDATE.
 * Do not delete this comment.
 * ******************************************/
 
 // Clean up the variables by removing leading and trailing white space.
 $title = trim($title);
 $favdrink = trim($favdrink);
 $pname = trim($pname);
 $favfictionalplace = trim($favfictionalplace);
 $favrealplace = trim($favrealplace);
 
 
// Sub-string the input to be a max of 64 characters
$title = substr($title, 0, 64);
$favdrink = substr($favdrink, 0, 64);
$pname = substr($pname, 0, 64);
$favfictionalplace = substr($favfictionalplace, 0, 64);
$favrealplace = substr($favrealplace, 0, 64);


// Strip tags of any HTML tags
$title = strip_tags($title);
$favdrink = strip_tags($favdrink);
$pname = strip_tags($pname);





?>