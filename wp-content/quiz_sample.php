
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title>
            sample quiz code
        </title>
<style type="text/css">
</style>
    </head>
    <body>
<?php
//BEGINNING OF QUESTION ONE
print '<p>(1) How many people in the world are considered food insecure?</p>';
if ($_POST['answer2']=="a"){
print '<p><input type="radio" checked="checked" name="answer2" value="a"/>820 Million<br/>';
$correct++;
print '&nbsp;&nbspCorrect!';
}
else
print '<p><input type="radio" name="answer2" value="a"/>820 Million<br/>';
if ($_POST['answer2']=="b")
print '<input type="radio" checked="checked" name="answer2" value="b"/>375 Million<br/>';
else
print '<input type="radio" name="answer2" value="b"/>375 Million<br/>';
if ($_POST['answer2']=="c")
print '<input type="radio" checked="checked" name="answer2" value="c"/>947 Million<br/>';
else
print '<input type="radio" name="answer2" value="c"/>947 Million<br/>';
if ($_POST['answer2']=="d")
print '<input type="radio" checked="checked" name="answer2" value="d"/>50  Million<br/>';
else
print '<input type="radio" name="answer2" value="d"/>50  Million<br/><br/></p>';



//QUESTION 2
print '<p>(2) What percent of those facing hunger are women and girls?</p>';
if ($_POST['answer3']=="a")
print '<input type="radio" checked="checked" name="answer3" value="a"/>35%<br/>';
else
print '<input type="radio" name="answer3" value="a"/>35%<br/>';
if ($_POST['answer3']=="b"){
print '<input type="radio" checked="checked" name="answer3" value="b"/>60%<br>';
$correct++;
print '&nbsp;&nbspCorrect!';
}
else
print '<input type="radio" name="answer3" value="b"/>60%<br/>';
if ($_POST['answer3']=="c")
print '<input type="radio" checked="checked" name="answer3" value="c"/>73%<br/>';
else
print '<input type="radio" name="answer3" value="c"/>73%<br/>';
if ($_POST['answer3']=="d")
print '<input type="radio" checked="checked" name="answer3" value="d"/>52%<br/><br/>';
else
print '<input type="radio" name="answer3" value="d"/>52%<br/><br/>';



//QUESTION 3
print '<form action="display_code_2.php" method="post">';
//BEGINNING OF QUESTION TWO
print '<p>(3) On average, how many tons of food is wasted around the world annually?</p>';
if ($_POST['answer1']=="a")
print '<input type="radio" checked="checked" name="answer1" value="a"/>730 Million<br/>';
else
print '<p><input type="radio" name="answer1" value="a"/>730 Million<br/>';
if ($_POST['answer1']=="b")
print '<input type="radio" checked="checked" name="answer1" value="b"/>800,000<br/>';
else
print '<input type="radio" name="answer1" value="b"/>800,000<br/>';
if ($_POST['answer1']=="c") {
print '<input type="radio" checked="checked" name="answer1" value="c"/>1.3 Billion<br/>';
$correct++;
print '&nbsp;&nbspCorrect!';
}
else
print '<input type="radio" name="answer1" value="c"/>1.3 Billion<br/>';
if ($_POST['answer1']=="d"){
print '<input type="radio" checked="checked" name="answer1" value="d"/>250 Million<br/>';
}
else
print '<input type="radio" name="answer1" value="d"/>250 Million<br/></p>';


//QUESTION 4
print '<p>(4) What Pathway to End Hunger are you most interested in learning more about?</p>';
if ($_POST['answer4']=="a")
print '<input type="radio" checked="checked" name="answer4" value="a"/>Nourishing Lives<br/>';
else
print '<input type="radio" name="answer4" value="a"/>Nourishing Lives<br/>';
if ($_POST['answer4']=="b")
print '<input type="radio" checked="checked" name="answer4" value="b"/>Empowering Communities<br>';
else
print '<input type="radio" name="answer4" value="b"/>Empowering Communities<br/>';
if ($_POST['answer4']=="c")
print '<input type="radio" checked="checked" name="answer4" value="c"/>Responding to Emergencies<br/>';
else
print '<input type="radio" name="answer4" value="c"/>Responding to Emergencies<br/>';
if ($_POST['answer4']=="d")
print '<input type="radio" checked="checked" name="answer4" value="d"/>Growing the Movement<br/><br/>';
else
print '<input type="radio" name="answer4" value="d"/>Growing the Movement<br/><br/>';

foreach ($_POST as $value){
if (isset ($value)){
$done++;
}
}

if ($done !=5)
print '<input type="submit" name="submit" value="check answers" /><br/><br/>';

if (($done > 0)&&($done < 5))
print 'You haven&#8217;t answered all the questions. Please finish the quiz and re-submit your answers.';
if($done==5){
if ($correct==0)
$correct="0";
print 'The correct answers: (1) 820 Million&nbsp;&nbsp; (2) 60%&nbsp;&nbsp; (3) 1.3 Billion';
}
print '</form>';
?>
    </body>
</html>