<?php

require_once __DIR__.DIRECTORY_SEPARATOR."Session.php";
class Conference
{
    private $name;
    private $welcomeText;
    private $startDate;
    private $endDate;
    private $city;
    private $location;
    private $roomList;
    private $sessionList;
    private $scheduleTimes;

    /**
     * Conference constructor.
     * @param string $name
     * @param string $welcomeText
     * @param string $startDate
     * @param string $endDate
     * @param string $city
     * @param string $location
     * @param array $roomList
     * @param array $sessionList
     * @param array $scheduleTimes
     */
    public function __construct(string $name, string $welcomeText, string $startDate, string $endDate, string $city,
                                string $location, array $roomList, array $sessionList, array $scheduleTimes)
    {
        $this->name = $name;
        $this->welcomeText = $welcomeText;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->city = $city;
        $this->location = $location;
        $this->roomList = $roomList;
        $this->sessionList = $sessionList;
        $this->scheduleTimes = $scheduleTimes;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getWelcomeText(): string
    {
        return $this->welcomeText;
    }

    /**
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->endDate;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @return array
     */
    public function getRoomList(): array
    {
        return $this->roomList;
    }

    /**
     * @return array
     */
    public function getSessionList(): array
    {
        return $this->sessionList;
    }

    /**
     * @param array $roomList
     */
    public function setRoomList(array $roomList)
    {
        $this->roomList = $roomList;
    }

    /**
     * @param array $sessionList
     */
    public function setSessionList(array $sessionList)
    {
        $this->sessionList = $sessionList;
    }

}