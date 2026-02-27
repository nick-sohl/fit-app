<?php
$height = $_POST["bodyHeight"];
$weight = $_POST["bodyWeight"];
$bmi = $weight / ($height / 100) ** 2;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML 5 Boilerplate</title>
  </head>
  <body>
    <section>
      <p>Dein BMI beträgt <?php echo $bmi ?></p>
    </section>
  </body>
</html>
