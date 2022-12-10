<?php 

$name = 'Bangladesh';
$age = 26;
$question = "How are you ?";

$word = 'age';

echo $$word;
echo "\n"; // Define New Line.

// Multiple Data Add.
echo 'Hello '.$name;
echo "\n";
echo "Hello {$name} \n";
echo "Hello {$name}, {$question}";
