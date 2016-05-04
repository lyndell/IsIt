<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Is It Tuesday?</title>
</head>
<body>
<h1>Is It Tuesday?</h1>
<?php

  date_default_timezone_set("CST6CDT");
  $currentDay = getdate()["weekday"];
  if ( $currentDay == "Tuesday" )
  { // It's Tuesday
    echo "YES!!! \n";
  }
  else 
  {
    echo "No." .
         "<p>\nToday is $currentDay.\n";
  }

?>
</body>

</html> 
