<?php
//access the global array called $_POST to get the values from the text fields
$answer1 = $_POST['question-1-answers'];

$answer2 = $_POST['question-2-answers'];

$answer3 = $_POST['question-3-answers'];

$answer4 = $_POST['question-4-answers'];

$answer5 = $_POST['question-5-answers'];

$totalScore = 0;

$Correct = 0;
//first question
if ($answer1 == "B") 
{ 
    $totalScore = $totalScore + 20; 
    $Correct++;
    $youranswer1 = "Sure"; 
}
else if($answer1 == "A")
{
    $youranswer1 = "Of course No!"; 
}
else if($answer1 == "C")
{
    $youranswer1 = "Maybe"; 
}
else if($answer1 == "D")
{
    $youranswer1 = "Let me check my schedule"; 
}
else
{
    $youranswer1 = "None.";
}
//second question
if ($answer2 == "A") 
{ 
    $totalScore = $totalScore + 20; 
    $Correct++;
    $youranswer2 = "Amazing!!";
}
else if($answer2 == "B")
{
    $youranswer2 = "Hungry.";
}
else if($answer2 == "C")
{
    $youranswer2 = "Bad.";
}
else if($answer2 == "D")
{
    $youranswer2 = "Dying.";
}
else
{
    $youranswer2 = "None.";
}
//third question
if ($answer3 == "C") 
{ 
    $totalScore = $totalScore + 20; 
    $Correct++;
    $youranswer3 = "Handsome.";
}
else if($answer3 == "A")
{
    $youranswer3 = "Crazy.";
}
else if($answer3 == "B")
{
    $youranswer3 = "Who? I don't know him.";
}
else if($answer3 == "D")
{
    $youranswer3 = "Can we find a hidden place to talk ?";
}
else
{
    $youranswer3 = "None.";
}
//four question
if ($answer4 == "C") 
{ 
    $totalScore = $totalScore + 20;
    $Correct++;
    $youranswer4 = "Taking EECS448!";
}
else if($answer4 == "A")
{
    $youranswer4 = "Fight with others.";
}
else if($answer4 == "B")
{
    $youranswer4 = "Miss a midterm.";
}
else if($answer4 == "D")
{
    $youranswer4 = "None of the answers above is right.";
}
else
{
    $youranswer4 = "None.";
}
//five question
if ($answer5 == "D") 
{ 
    $totalScore = $totalScore + 20; 
    $Correct++;
    $youranswer5 = "This quiz is amazing. I really want to do it again!";
}
else if($answer5 == "A")
{
    $youranswer5 = "Waste my time.";
}
else if($answer5 == "B")
{
    $youranswer5 = "Sound like a joke.";
}
else if($answer5 == "C")
{
    $youranswer5 = "Ball shit.";
}
else
{
    $youranswer5 = "None.";
}

echo "<p>Results: </p>";
echo "<p id='results'>You have $Correct/5 correct.</p>";
echo "<p id='Score'>Your total grade is $totalScore %.</p>";

echo "<p id='q1'>Question 1: Are you taking EECS448 ?<br>
    You answered:   $youranswer1<br>
    Correct answer: Sure<br>
    </p>";

echo "<p id='q2'>Question 2: What do you feel about EECS448 ?<br>
    You answered:   $youranswer2<br>
    Correct answer: Amazing!!<br>
    </p>";

echo "<p id='q3'>Question 3: What do you think about Gibbons?<br>
    You answered:   $youranswer3<br>
    Correct answer: Handsome.<br>
    </p>";

echo "<p id='q4'>Question 4: What's the most happy thing in the week?<br>
    You answered:   $youranswer4<br>
    Correct answer: Taking EECS448!<br>
    </p>";

echo "<p id='q5'>Question 5: What do you think about this quiz?<br>
    You answered:   $youranswer5<br>
    Correct answer: This quiz is amazing. I really want to do it again!<br>
    </p>";

echo "<a href='Quiz.html'><button id='button'>Go Back</button></a>";
?>
