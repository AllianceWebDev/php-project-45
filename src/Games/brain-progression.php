<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use function Engine\hello;
use function Engine\game;

hello('What number is missing in the progression?');

while (true) {
    $count = rand(5, 10);
    $step = rand(1, 10);
    $firstNumber = rand(1, 100);
    $missingIndex = rand(0, $count);

    $progression = [];
    for ($i = 0; $i <= $count; $i++) {
        $current = $firstNumber + $i * $step;
        if ($i === $missingIndex) {
            $answer = $current;
            $current = '...';
        }
        $progression[] = $current;
    }

    $question = implode(' ', $progression);

    game([
        'question' => $question,
        'answer' => $answer,
    ]);
}
