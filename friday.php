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
    echo "YES!!! \n";
  }
  else 
  {
    echo "No, <p>\n" .
         "Today is " . $currentDay . ".\n";
  }

?>
</body>

</html> 
