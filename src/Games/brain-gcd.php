<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use function Engine\hello;
use function Engine\game;

global $score;

$score = 0;

hello('Find the greatest common divisor of given numbers.');

while ($score < 3) {
    $a = rand(1, 100);
    $b = rand(1, 100);

    $question = "{$a} {$b}";

    while ($b !== 0) {
        $temp = $a % $b;
        $a = $b;
        $b = $temp;
    }

    $answer = $a;

    game([
        'question' => $question,
        'answer' => $answer,
    ]);
}
