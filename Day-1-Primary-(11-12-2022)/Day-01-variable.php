<!-- Variable  -->

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
echo "\n";

// Constant & Comment 
define('PI', 3.14159);
$task = 'Read';
 echo $task;
 echo "\n";
 $task = "Rrite";
 echo $task;
 echo "\n";

 echo "Value of PI =".PI;
    echo "\n";
    // echo constant('PI');
    echo "\n";
    // echo PI;

// This way we show use constant variable and show constant value;
// $constant = 'constant';
//  echo "Value of PI = {$constant('PI')}";
