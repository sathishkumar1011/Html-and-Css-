<!DOCTYPE html>
<html>
<head>
  <title>PHP String Functions</title>
  <style>
    body {
      background-color: #0b0c10;
      font-family: 'Segoe UI', sans-serif;
      color: #c5c6c7;
      margin: 40px;
    }
    .box {
      background: #1f2833;
      padding: 25px 35px;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.4);
      max-width: 550px;
      margin: auto;
    }
    h2 {
      color: #66fcf1;
      text-align: center;
      text-transform: uppercase;
      letter-spacing: 1px;
    }
    p {
      line-height: 1.6;
      font-size: 16px;
    }
    strong {
      color: #45a29e;
    }
  </style>
</head>
<body>

<div class="box">
  <h2>PHP String Functions Example</h2>

  <?php
  $text = "Hello PHP World";

  echo "<p><strong>Original Text:</strong> $text</p>";
  echo "<p><strong>Length:</strong> " . strlen($text) . "</p>";
  echo "<p><strong>Word Count:</strong> " . str_word_count($text) . "</p>";
  echo "<p><strong>Uppercase:</strong> " . strtoupper($text) . "</p>";
  echo "<p><strong>Lowercase:</strong> " . strtolower($text) . "</p>";
  echo "<p><strong>Reversed:</strong> " . strrev($text) . "</p>";
  echo "<p><strong>Replace 'PHP' with 'Coding':</strong> " . str_replace("PHP", "Coding", $text) . "</p>";
  echo "<p><strong>Position of 'World':</strong> " . strpos($text, "World") . "</p>";
  echo "<p><strong>Trimmed:</strong> " . trim("   $text   ") . "</p>";
  ?>
</div>

</body>
</html>
