<?php


echo "<div>";


$answer1 = $_POST['founded'];

$answer2 = $_POST['titles'];

$answer3 = $_POST['coach'];

$answer4 = $_POST['player'];

$answer5 = $_POST['conference'];
$score =0;

if($answer1 =="1865")
{
  $score++;
}
 if($answer2 == "3")
{
  $score++;
}
 if($answer3 == "Roy Williams")
{
  $score++;
}
 if($answer4 == "Wilt Chamberlain")
{
  $score++;
}
 if($answer5 == "Big 12")
{
  $score++;
}

$percentage = ($score*100)/5;
echo "<div id='results'>
 Question 1: When was the University of Kansas Founded? <br>
     You answered:
    $answer1 <br>
 Correct Answer: March 21, 1865 <br> <br>

  Question 2: How many national titles does the University of Kansas have in basketball? <br>
       You answered:
  $answer2 <br>
  Correct Answer: 3 <br> <br>

  Question 3: Who was the head coach of the University of Kansas basketball team from 1988-2003? <br>
       You answered:
  $answer3 <br>
  Correct Answer: Roy Williams <br> <br>

  Question 4: What former KU basketball player holds the all time points scored in a single game (100)? <br>
       You answered:
  $answer4 <br>
  Correct Answer: Wilt Chamberlain <br> <br>

  Question 5:  What conference is KU in? <br>
       You answered:
  $answer5 <br>
  Correct Answer: Big 12 <br> <br>

  Percentage: $percentage%

</div>";



?>
