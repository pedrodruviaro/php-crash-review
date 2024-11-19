<?php 

$isStudent = 1;
var_dump($isStudent);

$scores = [85, "90", 95.5]; // type juggling
var_dump($scores[0] + $scores[1] + $scores[2]);

$scores2 = [85, (int)95.5]; // casting
var_dump($scores2[0] + $scores2[1]);