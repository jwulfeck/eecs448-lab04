<?php
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];
$correct = 0;
echo "Question 1: What nation's civil war did the author George Orwell fight in?<br>";
if ($q1 == "Spain"){
  echo("Spain is correct!<br><br>");
  $correct++;
}
else{
  echo("You answered: " . $q1 . "<br>");
  echo("Correct Answer: Spain<br><br>");
}
echo "Question 2: Dante's <i>Divine Comedy</i> established the dominance of what Italian dialect?<br>";
if ($q2 == "Tuscan"){
  echo("Tuscan is correct!<br><br>");
  $correct++;

}
else{
  echo("You answered: " . $q2 . "<br>");
  echo("Correct Answer: Tuscan<br><br>");

}
echo "Question 3: What Biblical book's title is a translation of the Hebrew <i>qohelet</i>, meaning teacher?<br>";
if ($q3 == "Ecclesiastes"){
  echo("Ecclesiastes is correct!<br><br>");
  $correct++;

}
else{
  echo("You answered: " . $q3 . "<br>");
  echo("Correct Answer: Ecclesiastes<br><br>");

}
echo "Question 4: Which of these is not a novel by Haruki Murakami?<br>";
if ($q4 == "Snow Crash"){
  echo("<i>Snow Crash</i> is correct!<br><br>");
  $correct++;

}
else{
  echo("You answered: " . $q4 . "<br>");
  echo("Correct Answer: Brief Interviews with Hideous Men<br><br>");
}
echo "Question 5: Which of these American writers is the author of the 'gonzo' article <i>The Kentucky Derby Is Decadent And Depraved</i><br> ";
if ($q5 == "Hunter S. Thompson"){
  echo("Hunter S. Thompson is correct!<br><br>");
  $correct++;

}
else{
  echo("You answered: " . $q5 . "<br>");
  echo("Correct Answer: Hunter S. Thompson<br><br>");
}
echo("You got " .$correct . " correct.<br>");
$percent = $correct/5 * 100;
echo("That's ". $percent . "%!");



?>
