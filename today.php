<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Today Is...?</title>
</head>

<body>
<h1>Today Is</h1>
<?php

  date_default_timezone_set("CST6CDT");
  $currentDay = getdate()["weekday"];
  echo "<h2>$currentDay.</h2> \n";

  while(FALSE)
  {
    echo "No, <p>\n" .
         "Today is " . $currentDay . ".\n";
  }

?>
</body>

</html> 
