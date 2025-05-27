<?php 
// Date
echo date('l, Y-m-d H:i:s') . "\n";
echo "<br/>";

// Time
// Unix timestamp / Epoch time
// This is the number of seconds since January 1, 1970
echo date("l, Y-M-d",time()+60*60*24*12) . "\n"; // 12 days from now
echo "<br/>";

// Mktime
// This function creates a Unix timestamp from a specified date and time
// mktime(hour, minute, second, month, day, year)
echo date("l, Y-M-d", mktime(0, 0, 0, 12, 15, 1992)) . "\n"; // January 1, 2024
echo "<br/>";

// Strtotime
// This function converts a string representation of a date and time into a Unix timestamp
// strtotime(string)
echo date("l, Y-M-d", strtotime("next Monday")) . "\n"; // Next Monday


?>

