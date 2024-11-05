<?php
// index.php
require 'src/template.php';
require 'src/db.php';

// Create the table if it doesn't exist
createTable();

$title = "Welcome to My PHP App!";
$content = "<p>This is a basic PHP app running in a Docker container.</p>";


echo renderPage($title, $content);
?>
