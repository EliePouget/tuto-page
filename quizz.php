<?php
// Récupérer les réponses de l'utilisateur
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$q7 = $_POST['q7'];
$q8 = $_POST['q8'];
$q9 = $_POST['q9'];
$q10 = $_POST['q10'];

// Vérifier les réponses
if ($q1 == "b") {
    $q1_class = "correct";
} else {
    $q1_class = "incorrect";
}
if ($q2 == "a") {
    $q2_class = "correct";
} else {
    $q2_class = "incorrect";
}
if ($q3 == "b") {
    $q3_class = "correct";
} else {
    $q3_class = "incorrect";
}
if ($q4 == "a") {
    $q4_class = "correct";
} else {
    $q4_class = "incorrect";
}
if ($q5 == "a") {
    $q5_class = "correct";
} else {
    $q5_class = "incorrect";
}
if ($q6 == "a") {
    $q6_class = "correct";
} else {
    $q6_class = "incorrect";
}
if ($q7 == "a") {
    $q7_class = "correct";
} else {
    $q7_class = "incorrect";
}
if ($q8 == "b") {
    $q8_class = "correct";
} else {
    $q8_class = "incorrect";
}

// Afficher les résultats
echo "<p>Question 1: <span class='$q1_class'>$q1_class</span></p>";
echo "<p>Question 2: <span class='$q2_class'>$q2_class</span></p>";
echo "<p>Question 3: <span class='$q3_class'>$q3_class</span></p>";
echo "<p>Question 4: <span class='$q4_class'>$q4_class</span></p>";
echo "<p>Question 5: <span class='$q5_class'>$q5_class</span></p>";
echo "<p>Question 6: <span class='$q6_class'>$q6_class</span></p>";
echo "<p>Question 7: <span class='$q7_class'>$q7_class</span></p>";
echo "<p>Question 8: <span class='$q8_class'>$q8_class</span></p>";
?>

