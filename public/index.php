<?php
/**
 * ISP SoSe21 EA3 - OOP
 * Filename: index.php
 * @author Dirk Stricker dirk.stricker@stud.th-lubeck.de
 * @date 18.05.2021
 * @version 1.20210518.1016
 */
    require_once("mainProgram.php");

function buildHeaderAndHeadline($welcome, $conferenceName, $city)
{
    echo "<!DOCTYPE html>
          <html lang=\"de\">
          <head><title>Konferenzplaner</title>
          </head>
          <body>
          <h1>$welcome <br>$conferenceName in $city</h1>";
}
function buildScheduleHead($date)
{
    echo "<div>Tagungsprogramm am $date";
}
function buildSchedulePart($timeslot, $theme, $speaker)
{
    echo "<p><b>$timeslot</b> $theme $speaker<br></p>";
}
/**
 * Build the bottom of the site
 */
function buildBottom()
{
    echo "</div></body></html>";
}
//todo: Nur zu Testzwecken muss noch in die main oder gar controller?!?!?!
$conference = buildConference();
$welcome = $conference->getWelcomeText();
$name = $conference->getName();
$city = $conference->getCity();
$date1 = $conference->getStartDate();
$date2 = $conference->getEndDate();
$sessionList = $conference->getSessionList();
$roomList = $conference->getRoomList();
$location = $conference->getLocation();
buildHeaderAndHeadline($welcome, $name, $city);
buildScheduleHead($date1);
buildSchedulePart("ErsterTestDummy", "PHP für doofe", "Ich jedenfalls nicht");
buildBottom();
