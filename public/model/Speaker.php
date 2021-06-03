<?php


class Speaker
{
    private $firstName;
    private $lastname;
    private $title;

    /**
     * Speaker constructor.
     * @param string $firstName of the speaker
     * @param string $lastname of the speaker
     * @param string $title of the speaker
     */
    public function __construct(string $firstName,string $lastname,string $title)
    {
        $this->firstName = $firstName;
        $this->lastname = $lastname;
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }



}