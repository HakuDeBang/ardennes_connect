<?php

class Quiz {
    private $data = 'src/assets/datas/quizz.json';
    private $question;
    // private $answers;

    private function getData() {
        $data = json_decode(file_get_contents($this->data));
        return $data;
    }

    public function getQuestion() {
        $questionList = $this->getData();

        $question = [
            "question" => $questionList->question,
            "answers" => []
        ];
        foreach($questionList->answers as $answers) {
            array_push($question['answers'], $answers);
        }
        // var_dump($question);

        return $question;
    }
}