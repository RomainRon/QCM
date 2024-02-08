<?php 
class Answer {
    private $answer;
    private $goodAnswer;

    const BONNE_REPONSE = true;

    public function __construct($answer, $goodAnswer = false) {
        $this->answer = $answer;
        $this->goodAnswer = $goodAnswer;
    }

    public function getAnswer() {
        return $this->answer;
    }

    public function isGoodAnswer() {
        return $this->goodAnswer;
    }
}
?>
