<?php 
class Qcm {
    private $questions = [];

    public function addQuestion(Question $question) {
        $this->questions[] = $question;
    }

    public function generate() {
        foreach ($this->questions as $question) {
            echo "<p>{$question->getQuestion()}</p>";
            echo "<ul>";
            foreach ($question->getAnswers() as $answer) {
                echo "<li>{$answer->getAnswer()}</li>";
            }
         
        }
    }
}
?>