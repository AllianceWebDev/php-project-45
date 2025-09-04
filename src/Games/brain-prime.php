<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use function Engine\hello;
use function Engine\game;

global $score;

$score = 0;

hello('Answer "yes" if given number is prime. Otherwise answer "no".');

while ($score < 3) {
    $number = rand(1, 100);

    if ($number < 2) {
        $answer = 'no';
    } elseif ($number === 2) {
        $answer = 'yes';
    } elseif ($number % 2 === 0) {
        $answer = 'no';
    } else {
        $answer = 'yes';
        for ($i = 3, $limit = sqrt($number); $i <= $limit; $i += 2) {
            if ($number % $i === 0) {
                $answer = 'no';
                break;
            }
        }
    }

    game([
        'question' => $number,
        'answer' => $answer,
    ]);
}
