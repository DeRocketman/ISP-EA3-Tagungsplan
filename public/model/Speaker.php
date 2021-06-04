<?php


class Speaker
{
    private $firstName;
    private $lastname;
    private $title;
    private $salutation;

    /**
     * Speaker constructor.
     * @param string $firstName of the speaker
     * @param string $lastname of the speaker
     * @param string $title of the speaker
     * @param string $salutation of the speaker
     */
    public function __construct(string $firstName,string $lastname,string $title, $salutation)
    {
        $this->firstName = $firstName;
        $this->lastname = $lastname;
        $this->title = $title;
        $this->salutation = $salutation;
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

    /**
     * @return string
     */
    public function getSalutation(): string
    {
        return $this->salutation;
    }



}