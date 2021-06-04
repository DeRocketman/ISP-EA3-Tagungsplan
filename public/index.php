<?php
/**
 * ISP SoSe21 EA3 - OOP
 * Filename: index.php
 * @author Dirk Stricker dirk.stricker@stud.th-lubeck.de
 * @date 18.05.2021
 * @version 1.20210518.1016
 */
require_once __DIR__.DIRECTORY_SEPARATOR."model".DIRECTORY_SEPARATOR."Speaker.php";
require_once __DIR__.DIRECTORY_SEPARATOR."model".DIRECTORY_SEPARATOR."Session.php";
require_once __DIR__.DIRECTORY_SEPARATOR."model".DIRECTORY_SEPARATOR."DaySchedule.php";
require_once __DIR__.DIRECTORY_SEPARATOR."model".DIRECTORY_SEPARATOR."Conference.php";
require_once __DIR__.DIRECTORY_SEPARATOR."view".DIRECTORY_SEPARATOR."Title.php";
require_once __DIR__.DIRECTORY_SEPARATOR."view".DIRECTORY_SEPARATOR."StartSite.php";
require_once __DIR__.DIRECTORY_SEPARATOR."view".DIRECTORY_SEPARATOR."SiteOfEdit.php";

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
    $conferenceDates = $jsonArray->dates;
    $conferenceCity= $jsonArray->city;
    $conferenceLocation= $jsonArray->location;
    $conferenceRoomList= $jsonArray->roomList;
    $conferenceScheduleTimes= $jsonArray->scheduleTimes;
    $conferenceDayScheduleList= $jsonArray->dayScheduleList;

    return new Conference($conferenceName, $conferenceWelcomeText, $conferenceDates,
        $conferenceCity, $conferenceLocation, $conferenceRoomList, $conferenceDayScheduleList ,$conferenceScheduleTimes);
}

function buildStartSite()
{
    $conf = buildConference();
    $conf->createDaySchedules();
    buildHeaderAndHeadline($conf->getWelcomeText(), $conf->getName(), $conf->getCity());
    foreach ($conf->getDayScheduleList() as $daySchedule)
    {
        $date = $daySchedule->getDate;
        buildScheduleHead($date);
        buildSchedulePart("DummyDatum", "DummyThema", "Hans Pusemukkel");
        buildScheduleBottom();
        buildBottom();
    }
}

buildStartSite();

session_destroy();
