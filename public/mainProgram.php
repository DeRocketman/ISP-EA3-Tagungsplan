<?php

require_once __DIR__.DIRECTORY_SEPARATOR."model".DIRECTORY_SEPARATOR."Speaker.php";
require_once __DIR__.DIRECTORY_SEPARATOR."model".DIRECTORY_SEPARATOR."Session.php";
require_once __DIR__.DIRECTORY_SEPARATOR."model".DIRECTORY_SEPARATOR."DaySchedule.php";
require_once __DIR__.DIRECTORY_SEPARATOR."model".DIRECTORY_SEPARATOR."Conference.php";
require_once __DIR__.DIRECTORY_SEPARATOR."view".DIRECTORY_SEPARATOR."Title.php";

session_start();

function readJSON()
{
    $jsonFile   = file_get_contents('data/conference.json', true);
    return json_decode($jsonFile);
}

function buildConference(): Conference
{
    $jsonArray = readJSON();
    $conferenceName= $jsonArray->conferenceName;
    $conferenceWelcomeText= $jsonArray->welcomeText;
    $conferenceStartDate= $jsonArray->startDate;
    $conferenceEndDate= $jsonArray->endDate;
    $conferenceCity= $jsonArray->city;
    $conferenceLocation= $jsonArray->location;
    $conferenceRoomList= $jsonArray->roomList;
    $conferenceSessionList= $jsonArray->sessionList;

    return new Conference($conferenceName, $conferenceWelcomeText, $conferenceStartDate, $conferenceEndDate,
                                 $conferenceCity, $conferenceLocation, $conferenceRoomList, $conferenceSessionList);
}

$conference = buildConference();
echo($conference->getName());
session_destroy();




