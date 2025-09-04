<?php

namespace Engine;

use function cli\line;
use function cli\prompt;

function hello(string $message = ''): void
{
    global $name;
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line('Hello, %s!', $name);
    line($message);
}

function game(array $details = []): void
{
    global $name, $score;
    line("Question: {$details['question']}");
    $answer = prompt('Your answer');

    is_numeric($details['answer']) ? $answer = (int) $answer : $answer;

    if ($answer === $details['answer']) {
        line('Correct!');
        $score++;
    } else {
        line("%s is wrong answer ;(. Correct answer was %s.", $answer, $details['answer']);
        line("Let's try again, %s!", $name);
        exit();
    }

    if ($score === 3) {
        line('Congratulations, %s!', $name);
        exit();
    }
}
