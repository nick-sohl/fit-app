<?php

$height = $_GET["height"];
$weight = $_GET["weight"];
$bmi = $weight / ($height / 100) ** 2;
echo "<section>";
echo "<p>Dein BMI beträgt: $bmi</p>";
echo "<section>";
