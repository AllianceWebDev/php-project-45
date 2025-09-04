<?php


require_once __DIR__ . '/../../vendor/autoload.php';



use BrainGames\Cli\Engine;

$engine = new Engine();
$engine->hello('Answer "yes" if given number is prime. Otherwise answer "no".');


while(true) {

    $number = rand(1, 100);   
    
    if($number < 2) {
        $answer = 'no';
    } elseif($number == 2) {
        $answer = 'yes';
    } elseif($number % 2 == 0) {
        $answer = 'no';
    }  else {
        $answer = 'yes';
        for ($i = 3; $i <= sqrt($number); $i += 2) {
            if ($number % $i == 0) {
                $answer = 'no';
                break;
            } 
        }
    }

    $engine->game([
        'question' => $number,
        'answer' => $answer,        
    ]);
}