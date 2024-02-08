<?php 
class Question {
    private $questions;
    private $answers = [];
    
    public function __construct($questions) {
        $this->questions = $questions;
    }

    public function addAnswer(Answer $answer) {
        $this->answers[] = $answer;
    }


    public function getQuestion() {
        return $this->questions;
    }

    public function getAnswers() {
        return $this->answers;
    }

 
}

?>