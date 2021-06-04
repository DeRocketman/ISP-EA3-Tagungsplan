<?php

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