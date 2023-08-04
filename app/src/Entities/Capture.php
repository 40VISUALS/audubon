<?php

namespace Audubon\Entities;

class Capture
{
    private $id;
    private $date_time;
    private $location;
    private $member_id;
    /** @var Member */
    private $member;

    public function getCaptureID()
    {
        return $this->id;
    }

    public function getDateTime()
    {
        return $this->date_time;
    }

    public function setDateTime($dateTime): void
    {
        $this->date_time = $dateTime;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location): void
    {
        $this->location = $location;
    }

    public function getMemberUID()
    {
        return $this->member_id;
    }

    public function setMemberUID($uid): void
    {
        $this->member_id = $uid;
    }

    public function getMember()
    {
        return $this->member;
    }

    /**
     * @param Member $member
     */
    public function setMember($member): void
    {
        $this->member = $member;
    }


}