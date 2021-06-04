<?php


class DaySchedule
{
    private $date;
    private $room;
    private $sessionList;

    /**
     * SessionDaySchedule constructor.
     * @param string $date
     * @param string $room
     */
    public function __construct(string $date,string $room)
    {
        $this->date = $date;
        $this->room = $room;
        $this->sessionList = [];
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate(string $date)
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getRoom(): string
    {
        return $this->room;
    }

    /**
     * @param string $room
     */
    public function setRoom(string $room)
    {
        $this->room = $room;
    }

    /**
     * @return array
     */
    public function getSessionList(): array
    {
        return $this->sessionList;
    }

    /**
     * @param array $sessionList
     */
    public function setSessionList(array $sessionList)
    {
        $this->sessionList = $sessionList;
    }

    public function createSessionList(array $scheduleTimes)
    {
        foreach ($scheduleTimes as $timeslot)
        {
            $session = new Session($timeslot, "", "");
            array_push($this->sessionList, $session);
        }
    }
}