<?php


require_once __DIR__ . '/../../vendor/autoload.php';



use BrainGames\Cli\Engine;

$engine = new Engine();
$engine->hello('What number is missing in the progression?');


while(true) {

    $count = rand(5, 10); 
    $step = rand(1, 10);
    $first_number = rand(1, 100);
    $number = rand(0, $count);

    $array = [];
    for($i = 0; $i <= $count; $i++) {
        $s = $first_number + $i * $step;
        if($i == $number) {
            $answer = $s;
            $s = '...';
        }
        $array[] = $s;
    }

    $question = implode(' ', $array);

    $engine->game([
        'question' => $question,
        'answer' => $answer,        
    ]);
}