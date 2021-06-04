<?php

require_once __DIR__.DIRECTORY_SEPARATOR."Session.php";
class Conference
{
    private $name;
    private $welcomeText;
    private $dates;
    private $city;
    private $location;
    private $roomList;
    private $DayScheduleList;
    private $scheduleTimes;

    /**
     * Conference constructor.
     * @param string $name
     * @param string $welcomeText
     * @param array $dates
     * @param string $city
     * @param string $location
     * @param array $roomList
     * @param array $DayScheduleList
     * @param array $scheduleTimes
     */
    public function __construct(string $name, string $welcomeText, array $dates, string $city, string $location,
                                array $roomList, array $DayScheduleList, array $scheduleTimes)
    {
        $this->name = $name;
        $this->welcomeText = $welcomeText;
        $this->dates = $dates;
        $this->city = $city;
        $this->location = $location;
        $this->roomList = $roomList;
        $this->DayScheduleList = $DayScheduleList;
        $this->scheduleTimes = $scheduleTimes;
    }

    public function createDaySchedules()
    {
        foreach($this->dates as $dates)
        {
            foreach ($this->roomList as $room)
            {
                $daySchedule = new DaySchedule($dates, $room);
                $daySchedule->createSessionList($this->scheduleTimes);
                array_push($this->DayScheduleList, $daySchedule);
            }
        }
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
     * @return array
     */
    public function getDates(): array
    {
        return $this->dates;
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
    public function getDayScheduleList(): array
    {
        return $this->DayScheduleList;
    }

    /**
     * @return array
     */
    public function getScheduleTimes(): array
    {
        return $this->scheduleTimes;
    }
}