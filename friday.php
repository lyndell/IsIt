<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Is It Friday?</title>
</head>

<body>
<h1>Is It Friday?</h1>
<?php

  date_default_timezone_set("CST6CDT");
  $currentDay = getdate()["weekday"];
  if ( $currentDay == "Friday" )
  { // It's Friday
    echo "<h2>YES!!!</h2> \n";
    echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/kfVsfOSbJY0" frameborder="0" allowfullscreen></iframe>' . "\n";
  }
  else 
  {
    echo "No, <p>\n" .
         "Today is " . $currentDay . ".\n";
  }

?>
</body>

</html> 
