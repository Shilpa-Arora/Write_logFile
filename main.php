<?php

date_default_timezone_set("America/New_York");// to get right time zone
$openfile = 'logs.txt'; // log file is opened and linked to variable openfile
// using if else command to create log file for first time as there will be no log file for the user
if (file_exists($openfile)) // if there might be a log file present it will skip the else part and move to the amendment of log file
{} 
else
{
    fopen($openfile, 'w');// to create log file for first time using fopen and write mode
}
$add = file_get_contents($openfile);// all the content from log file is put into add variable using openfile variable
$add .= "shilpa arora last logged on ".date("Y-m-d");//content is added to the existing content in add variable
$add .=", ".date("l");//content is added to the existing content in add variable
$add .=" at ".date("h:i:sa")."<br>";//content is added to the existing content in add variable
file_put_contents($openfile, $add);// all the content in add variable is added back to log file via openfile variable
$readfile = file_get_contents("logs.txt");// content from log file is read and loaded into new variable readfile
echo $readfile;// all the content from logfile is echoed on the screen via readfile variable.

?>
