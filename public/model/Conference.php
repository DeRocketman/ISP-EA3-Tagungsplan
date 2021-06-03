<?php


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
     */
    public function __construct(string $name,string $welcomeText,string $startDate,string $endDate,string $city,
                                string $location,array $roomList,array $sessionList)
    {
        $this->name = $name;
        $this->welcomeText = $welcomeText;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->city = $city;
        $this->location = $location;
        $this->roomList = $roomList;
        $this->sessionList = $sessionList;
    }


}