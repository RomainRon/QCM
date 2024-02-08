<?php
require_once 'class/Qcm.php';
require_once 'class/Question.php';
require_once 'class/Answer.php';

$qcm = new Qcm();
$question1 = new Question('POO signifie :');
$question1->addAnswer(new Answer('Php Orienté Objet'));
$question1->addAnswer(new Answer('ProgrammatiOn Orientée Outil'));
$question1->addAnswer(new Answer('Programmation Orientée Objet', Answer::BONNE_REPONSE));
$question1->addAnswer(new Answer('Papillon Onirique Ostentatoire'));
$qcm->addQuestion($question1);
$qcm->generate();