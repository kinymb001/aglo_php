<?php
include 'src\autoload.php';
$question = new src\Question(2,"javascript adv", "var i = 5","khai bao bien toan cuc i va gan cho i = 5");

$itemQuestionList= new src\QuestionsList();
$itemQuestionList->push($question);
$itemQuestionList->parse('questions.md')->all();
//print_r($itemQuestionList->filter(function($i){return $i->number % 2 == 0;}));
print_r($itemQuestionList->last());
print_r($itemQuestionList->first());