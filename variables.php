<html>
 <head>
  <title>PHP VARS</title>
 </head>
 <body>
  <?php
    $number = 5;
    $string = "I like candy.";

    function displayString()
    {
      global $number;
      echo "{$number} {$GLOBALS['string']}";
    }

    displayString();
  ?>
 </body>
</html>