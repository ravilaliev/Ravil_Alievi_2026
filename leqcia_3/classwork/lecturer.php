<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$answers = $_POST['answers'];

echo "<h2>Student: $firstname $lastname</h2>";

echo "<pre>";
print_r($answers);
echo "</pre>";

?>