<!DOCTYPE html>
<html>
<head>
  <title>PHP Arithmetic Operations</title>
</head>
<body style="background: linear-gradient(135deg, #36d1dc, #5b86e5); font-family: 'Poppins', sans-serif; color: #222; text-align: center; padding: 60px;">

  <?php

  $num1 = 15;
  $num2 = 3;

  $add = $num1 + $num2;
  $sub = $num1 - $num2;
  $mul = $num1 * $num2;
  $div = $num1 / $num2;
  $mod = $num1 % $num2;

  echo "<div style='background:#fff; padding:30px; border-radius:15px; box-shadow:0 5px 15px rgba(0,0,0,0.2); display:inline-block;'>";
  echo "<h2 style='color:#5b86e5; margin-bottom:20px;'>💡 PHP Arithmetic Operations</h2>";
  echo "<p style='font-size:18px; margin:5px 0;'>First Number: <b>$num1</b></p>";
  echo "<p style='font-size:18px; margin:5px 0;'>Second Number: <b>$num2</b></p><hr style='margin:20px 0;'>";

  echo "<p style='font-size:18px;'>➕ Addition: $num1 + $num2 = <b>$add</b></p>";
  echo "<p style='font-size:18px;'>➖ Subtraction: $num1 - $num2 = <b>$sub</b></p>";
  echo "<p style='font-size:18px;'>✖️ Multiplication: $num1 × $num2 = <b>$mul</b></p>";
  echo "<p style='font-size:18px;'>➗ Division: $num1 ÷ $num2 = <b>$div</b></p>";
  echo "<p style='font-size:18px;'>🔹 Modulus (Remainder): $num1 % $num2 = <b>$mod</b></p>";
  echo "</div>";
  ?>

</body>
</html>
