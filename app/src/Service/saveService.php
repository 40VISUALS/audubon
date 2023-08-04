<?php

namespace App\src\Service;

use Audubon\Entities\Bird;
use Audubon\Entities\Capture;
use Audubon\Entities\Member;
use LaravelDoctrine\ORM\Facades\EntityManager;

class saveService
{
    private Bird $birdObj;
    private Capture $captureObj;
    private Member $memberObj;

    public function putDataIntoClasses($data): void
    {
        $this->birdObj = $this->getBirdData($data);
        $this->captureObj = $this->getCaptureData($data);
        $this->memberObj = $this->getMemberData($data);
        $this->captureObj->setMember($this->memberObj);
        $this->pushClassesToDatabase();
    }

    private function pushClassesToDatabase(): void
    {
        if(isset($this->birdObj, $this->captureObj, $this->memberObj))
        {
            //push each class to each table
            EntityManager::persist($this->birdObj);
            EntityManager::persist($this->captureObj);
            //EntityManager::persist($this->memberObj);
            EntityManager::flush();
        }
    }

    public function getBirdData($data): Bird
    {
        $bird = new Bird();

        if(isset($data['species'], $data['description']))
        {
            $bird->setSpecies($data['species']);
            $bird->setDescription($data['description']);
        }

        return $bird;
    }

    public function getCaptureData($data): Capture
    {
        $capture = new Capture();

        if(isset($data['date'], $data['location']))
        {
            //$capture->setDateTime(date_create($data['date'] . $data['time']));
            $capture->setDateTime($data['date'] . " " . $data['time']);
            $capture->setLocation($data['location']);
        }

        return $capture;
    }

    public function getMemberData($data): Member
    {
        $member = new Member();

        if(isset($data['name'], $data['email'], $data['phone_number']))
        {
            $member->setName($data['name']);
            $member->setEmail($data['email']);
            $member->setPhoneNum($data['phone_number']);
        }

        return $member;
    }
}