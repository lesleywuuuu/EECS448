<?php

$Q1_ans = $_POST["question1"];
$Q2_ans = $_POST["question2"];
$Q3_ans = $_POST["question3"];
$Q4_ans = $_POST["question4"];
$Q5_ans = $_POST["question5"];
$corrent_num = 0;
$score = 0;

//question1
if($Q1_ans == "Washington DC")
{
    echo "1) What is the capital of the US?<br>";
    echo "You answered: " . $Q1_ans . "<br>";
    echo "Correct Answer is: Washington DC<br><br>";
    $corrent_num += 1;
    $score = $corrent_num*20;
}
else if($Q1_ans == "New York")
{
    echo "1) What is the capital of the US?<br>";
    echo "You answered: " . $Q1_ans . "<br>";
    echo "Correct Answer is: Washington DC<br><br>";
}
else if($Q1_ans == "Philadelphia")
{
    echo "1) What is the capital of the US?<br>";
    echo "You answered: " . $Q1_ans . "<br>";
    echo "Correct Answer is: Washington DC<br><br>";
}
else if($Q1_ans == "Chicago")
{
    echo "1) What is the capital of the US?<br>";
    echo "You answered: " . $Q1_ans . "<br>";
    echo "Correct Answer is: Washington DC<br><br>";
}
else if($Q1_ans == "")
{
    echo "1) What is the capital of the US?<br>";
    echo "You answered: " . $Q1_ans . "<br>";
    echo "Correct Answer is: Washington DC<br><br>";
}

//question2
if($Q2_ans == "Chengdu")
{
    echo "2) What is the capital of China?<br>";
    echo "You answered: " . $Q2_ans . "<br>";
    echo "Correct Answer is: Beijing<br><br>";
}
else if($Q2_ans == "Tianjin")
{
    echo "2) What is the capital of China?<br>";
    echo "You answered: " . $Q2_ans . "<br>";
    echo "Correct Answer is: Beijing<br><br>";
}
else if($Q2_ans == "Shanghai")
{
    echo "2) What is the capital of China?<br>";
    echo "You answered: " . $Q2_ans . "<br>";
    echo "Correct Answer is: Beijing<br><br>";
}
else if($Q2_ans == "Beijing")
{
    echo "2) What is the capital of China?<br>";
    echo "You answered: " . $Q2_ans . "<br>";
    echo "Correct Answer is: Beijing<br><br>";
    $corrent_num += 1;
    $score = $corrent_num*20;
}
else if($Q2_ans == "")
{
    echo "2) What is the capital of China?<br>";
    echo "You answered: " . $Q2_ans . "<br>";
    echo "Correct Answer is: Beijing<br><br>";
}

//question3
if($Q3_ans == "Hokkaido")
{
    echo "3) What is the capital of Japan?<br>";
    echo "You answered: " . $Q3_ans . "<br>";
    echo "Correct Answer is: Tokyo<br><br>";
}
else if($Q3_ans == "Osaka")
{
    echo "3) What is the capital of Japan?<br>";
    echo "You answered: " . $Q3_ans . "<br>";
    echo "Correct Answer is: Tokyo<br><br>";
}
else if($Q3_ans == "Tokyo")
{
    echo "3) What is the capital of Japan?<br>";
    echo "You answered: " . $Q3_ans . "<br>";
    echo "Correct Answer is: Tokyo<br><br>";
    $corrent_num += 1;
    $score = $corrent_num*20;
}
else if($Q3_ans == "Yokohama")
{
    echo "3) What is the capital of Japan?<br>";
    echo "You answered: " . $Q3_ans . "<br>";
    echo "Correct Answer is: Tokyo<br><br>";
}
else if($Q3_ans == "")
{
    echo "3) What is the capital of Japan?<br>";
    echo "You answered: " . $Q3_ans . "<br>";
    echo "Correct Answer is: Tokyo<br><br>";
}

//question4
if($Q4_ans == "Barcelona")
{
    echo "4) What is the capital of Spain?<br>";
    echo "You answered: " . $Q4_ans . "<br>";
    echo "Correct Answer is: Madrid<br><br>";
}
else if($Q4_ans == "Madrid")
{
    echo "4) What is the capital of Spain?<br>";
    echo "You answered: " . $Q4_ans . "<br>";
    echo "Correct Answer is: Madrid<br><br>";
    $corrent_num += 1;
    $score = $corrent_num*20;
}
else if($Q4_ans == "Cordoba")
{
    echo "4) What is the capital of Spain?<br>";
    echo "You answered: " . $Q4_ans . "<br>";
    echo "Correct Answer is: Madrid<br><br>";
}
else if($Q4_ans == "Granada")
{
    echo "4) What is the capital of Spain?<br>";
    echo "You answered: " . $Q4_ans . "<br>";
    echo "Correct Answer is: Madrid<br><br>";
}
else if($Q4_ans == "")
{
    echo "4) What is the capital of Spain?<br>";
    echo "You answered: " . $Q4_ans . "<br>";
    echo "Correct Answer is: Madrid<br><br>";
}

//question5
if($Q5_ans == "Birmingham")
{
    echo "5) What is the capital of the UK?<br>";
    echo "You answered: " . $Q5_ans . "<br>";
    echo "Correct Answer is: London<br><br>";
}
else if($Q5_ans == "Bristol")
{
    echo "5) What is the capital of the UK?<br>";
    echo "You answered: " . $Q5_ans . "<br>";
    echo "Correct Answer is: London<br><br>";
}
else if($Q5_ans == "London")
{
    echo "5) What is the capital of the UK?<br>";
    echo "You answered: " . $Q5_ans . "<br>";
    echo "Correct Answer is: London<br><br>";
    $corrent_num += 1;
    $score = $corrent_num*20;
}
else if($Q5_ans == "Manchester")
{
    echo "5) What is the capital of the UK?<br>";
    echo "You answered: " . $Q5_ans . "<br>";
    echo "Correct Answer is: London<br><br>";
}
else if($Q5_ans == "")
{
    echo "5) What is the capital of the UK?<br>";
    echo "You answered: " . $Q5_ans . "<br>";
    echo "Correct Answer is: London<br><br>";
}

echo "Total answered correctly: " . $corrent_num . "<br>";
echo "Total Score: " . $score  . "%<br>";

?>