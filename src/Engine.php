<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

class Engine
{
    public $name;
    public $score = 0;
    public $answer;


    public function hello($message = '') {
        line('Welcome to the Brain Games!');
        $this->name = prompt('May I have your name?');
        line('Hello, %s!', $this->name);
        line($message);
    }

    public function game($details = []) {
        line("Question: {$details['question']}");
        $this->answer = prompt('Your answer');
        
        if($this->answer == $details['answer']) {
            line('Correct!');
            $this->score++;
        } else {
            line("%s is wrong answer ;(. Correct answer was %s.", $this->answer, $details['answer']);
            line("Let's try again, %s", $this->name);
            exit();
        }
        if($this->score == 3) {
            line('Congratulations, %s!', $this->name);
            exit();
        }

    }

    public function getName() {
        return $this->name;
    }
}