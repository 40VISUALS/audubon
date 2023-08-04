<?php

namespace Unit;
use App\src\Service\saveService;
use Audubon\Entities\Bird;
use Audubon\Entities\Capture;
use Audubon\Entities\Member;
use PHPUnit\Framework\TestCase;

final class saveServiceTest extends TestCase
{
    public function testGetBirdData(): void
    {
        $createdBird = new Bird();
        $saveService = new saveService();
        $createdBird->setSpecies("Sandhill Crane");
        $createdBird->setDescription("Large ground bird with a red head");
        $data = array("species" => "Sandhill Crane", "description" => "Large ground bird with a red head");
        $methodBird = $saveService->getBirdData($data);
        $this->assertEquals($createdBird, $methodBird);
    }

    public function testGetCaptureData(): void
    {
        $saveService = new saveService();
        $createdCapture = new Capture();
        $createdCapture->setDateTime("2023-08-05 09:49:00");
        $createdCapture->setLocation("Grand Haven");
        $data = array("date" => "2023-08-05", "time" => "09:49:00", "location" => "Grand Haven");
        $methodCapture = $saveService->getCaptureData($data);
        $this->assertEquals($createdCapture, $methodCapture);
    }

    public function testGetMemberData(): void
    {
        $saveService = new saveService();
        $createdMember = new Member();
        $createdMember->setName("Matthew");
        $createdMember->setEmail("matthew@gmail.com");
        $createdMember->setPhoneNum(6168160618);
        $data = array("name" => "Matthew", "email" => "matthew@gmail.com", "phone_number" => 6168160618);
        $methodMember = $saveService->getMemberData($data);
        $this->assertEquals($createdMember, $methodMember);
    }
}