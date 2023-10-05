<?php

function quizzPage() {
    $quiz = new Quiz();
    $question = $quiz->getQuestion();
    
    include('src/view/quizz.php');
}