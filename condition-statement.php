<?php
function checkEligibilityToVote()
{
    $age = 20;
    $name = "Mutuku Kasyoka";
    if($age >=18)
    {
        echo "$name You are eligible to vote";
    }
    else
    {
        echo "$name You are not eligible to vote";
    }
}
checkEligibilityToVote();


// grading

function gradingSystem()
{
    $marks = 76;
    if($marks >=80)
    {
        $grade = "A (plain)";
    }
    else if($marks >=75)
    {
        $grade = "A-";
    }
    else if($marks >=65)
    {
        $grade = "B+";
    }
    else if($marks >=60)
    {
        $grade = "B (plain)";
    }
    else if($marks >=50)
    {
        $grade = "C+";
    }
    else
    {
        $grade = "FAIL";
    }

    echo "Your grade is $grade";
}
gradingSystem();
?>