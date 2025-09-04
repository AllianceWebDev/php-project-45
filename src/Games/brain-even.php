<?php


require_once __DIR__ . '/../../vendor/autoload.php';



use BrainGames\Cli\Engine;

$engine = new Engine();
$engine->hello('Answer "yes" if the number is even, otherwise answer "no".');


while(true) {

    $rand = rand(1, 100);
    if($rand % 2 === 0) $answer = 'yes'; else $answer = 'no';

    $engine->game([
        'question' => $rand,
        'answer' => $answer,
    ]);
}