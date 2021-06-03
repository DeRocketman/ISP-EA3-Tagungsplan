<?php


/**
 * Class Session to combine a slot
 */
class Session
{
    private $timeslot;
    private $theme;
    private $speaker;


    /**
     * Session constructor.
     * @param string $timeslot
     * @param string $theme
     * @param array $speaker
     */
    public function __construct(string $timeslot, string $theme, array $speaker)
    {
        $this->timeslot= $timeslot;
        $this->theme= $theme;
        $this->speaker= $speaker;
    }


    /**
     * @return string
     */
    public function getTimeslot(): string
    {
        return $this->timeslot;
    }

    /**
     * @param string $timeslot
     */
    public function setTimeslot(string $timeslot)
    {
        $this->timeslot = $timeslot;
    }

    /**
     * @return string
     */
    public function getTheme(): string
    {
        return $this->theme;
    }

    /**
     * @param string $theme
     */
    public function setTheme(string $theme)
    {
        $this->theme = $theme;
    }

    /**
     * @return array
     */
    public function getSpeaker(): array
    {
        return $this->speaker;
    }

    /**
     * @param array $speaker
     */
    public function setSpeaker(array $speaker)
    {
        $this->speaker = $speaker;
    }
}