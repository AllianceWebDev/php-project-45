<?php


require_once __DIR__ . '/../../vendor/autoload.php';



use BrainGames\Cli\Engine;

$engine = new Engine();
$engine->hello('Find the greatest common divisor of given numbers.');


while(true) {

    $a = rand(1, 100);
    $b = rand(1, 100);

    $question = "{$a} {$b}";


    while($b != 0) {
        $temp = $a % $b;
        $a = $b;
        $b = $temp;
    }

    $answer = $a;    

    $engine->game([
        'question' => $question,
        'answer' => $answer,        
    ]);
}