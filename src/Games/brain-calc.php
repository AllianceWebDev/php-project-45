<?php


require_once __DIR__ . '/../../vendor/autoload.php';



use BrainGames\Cli\Engine;

$engine = new Engine();
$engine->hello('What is the result of the expression?');


while(true) {

    $rand = rand(0, 2);
    $number = rand(1, 100);
    $number2 = rand(1, 100);
    
    switch($rand) {
        case 0:
            $symbol = '+';
            $answer = $number + $number2;
            break;
        case 1:
            $symbol = '-';
            $answer = $number - $number2;
            break;
        case 2:
            $symbol = '*';
            $answer = $number * $number2;
            break;
    }


    $question = "{$number} {$symbol} {$number2}";


    $engine->game([
        'question' => $question,
        'answer' => $answer,
        
    ]);
}