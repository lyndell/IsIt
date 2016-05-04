<?php
  date_default_timezone_set("CST6CDT");
  $currentDay = getdate()["weekday"];

if(defined('STDIN') )
{
  echo "Today is...\n";
  sleep(1);
  echo "$currentDay.\n";
  exit();
}
else

  echo("<!--Not Running from CLI-->");

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Today Is...?</title>
</head>

<body>
<?php

  date_default_timezone_set("CST6CDT");
  $currentDay = getdate()["weekday"];
  echo "<h1>Today is...</h1>";
  sleep(1);
  echo "<h2>$currentDay.</h2> \n";

  while(FALSE)
  {
    echo "No, <p>\n" .
         "Today is " . $currentDay . ".\n";
  }

?>
</body>

</html> 
