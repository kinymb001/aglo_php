<?php
include 'src\autoload.php';
$question = new src\Question("số n","toán lớp 1", "1+1=?","2");

$itemQuestionList= new src\QuestionsList();
$itemQuestionList->push($question);
print_r($itemQuestionList->fillter(function($i){return $i->number;}));
//print_r($itemQuestionList->parse('questions.md')->all());

