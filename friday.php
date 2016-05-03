<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Is It Friday</title>
</head>

<body>
<?php

  date_default_timezone_set("CST6CDT");
  if ( getdate()["weekday"] == "Friday" )
  { // It's Friday
    echo "YES!!! \n";
  }
  else 
  {
    echo "No. <br>\n";
  }

?>
</body>

</html> 
