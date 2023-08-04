<?php


namespace Audubon\Entities;


class Member{
    private $id;
    private $name;
    private $email;
    private $phone_num;

    public function getMemberUID(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function getPhoneNumber(): string
    {
        return $this->phone_num;
    }

    public function setPhoneNum($phoneNum): void
    {
        $this->phone_num = $phoneNum;
    }
}