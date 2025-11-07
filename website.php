<!DOCTYPE html>
<html>
<head>
  <title>PHP Arithmetic Operations</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #89f7fe, #66a6ff); 
      margin: 0;
      padding: 40px;
      text-align: center;
      min-height: 100vh;
    }

    h2 {
      color: #ffffff;
      margin-bottom: 30px;
      text-shadow: 1px 1px 4px rgba(0,0,0,0.3);
    }

    .box {
      background: rgba(255, 255, 255, 0.95);
      width: 420px;
      margin: auto;
      padding: 25px;
      border-radius: 15px;
      box-shadow: 0px 6px 20px rgba(0,0,0,0.2);
      text-align: left;
      backdrop-filter: blur(5px);
    }

    p {
      font-size: 18px;
      line-height: 1.6;
      color: #333;
    }

    hr {
      border: none;
      border-top: 2px solid #007bff;
      margin: 20px 0;
    }

    .result {
      background-color: #e3f2fd;
      padding: 10px;
      border-radius: 8px;
      margin-top: 10px;
      border-left: 4px solid #007bff;
    }
  </style>
</head>
<body>
  <h2>PHP Variables and Arithmetic Operations</h2>

  <div class="box">
    <?php
      
      $num1 = 20;
      $num2 = 10;

      
      $sum = $num1 + $num2;          
      $difference = $num1 - $num2;   
      $product = $num1 * $num2;      
      $quotient = $num1 / $num2;     

      
      echo "<p><strong>First Number:</strong> $num1</p>";
      echo "<p><strong>Second Number:</strong> $num2</p>";
      echo "<hr>";

      echo "<div class='result'>";
      echo "<p><strong>Addition ( $num1 + $num2 ) =</strong> $sum</p>";
      echo "<p><strong>Subtraction ( $num1 - $num2 ) =</strong> $difference</p>";
      echo "<p><strong>Multiplication ( $num1 × $num2 ) =</strong> $product</p>";
      echo "<p><strong>Division ( $num1 ÷ $num2 ) =</strong> $quotient</p>";
      echo "</div>";
    ?>
  </div>

</body>
</html>
