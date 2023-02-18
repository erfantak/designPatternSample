<?php


namespace Adapter;


class DataService
{
    protected string $name;
    protected string $email;
    protected string $phoneNumber;

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @param string $phoneNumber
     */
    public function setPhoneNumber(string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function showData()
    {
        echo "name: {$this->name}, phoneNumber: {$this->phoneNumber}, email: {$this->email}";
    }
}