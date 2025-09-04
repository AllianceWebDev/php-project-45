<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use function Engine\hello;
use function Engine\game;

hello('What is the result of the expression?');

while (true) {
    $rand = rand(0, 2);
    $number = rand(1, 100);
    $number2 = rand(1, 100);

    switch ($rand) {
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

    game([
        'question' => $question,
        'answer' => $answer,
    ]);
}
