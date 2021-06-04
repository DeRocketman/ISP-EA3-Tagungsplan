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
     * @param string $speaker
     */
    public function __construct(string $timeslot, string $theme, string $speaker)
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
     * @return string
     */
    public function getSpeaker(): string
    {
        return $this->speaker;
    }

    /**
     * @param string $speaker
     */
    public function setSpeaker(string $speaker)
    {
        $this->speaker = $speaker;
    }
}