<?php


namespace Audubon\Entities;


class Bird
{
    private $species;
    private $description;
    private $id;

    public function getBirdID()
    {
        return $this->id;
    }

    public function getSpecies()
    {
        return $this->species;
    }

    public function setSpecies($species): void
    {
        $this->species = $species;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description): void
    {
        $this->description = $description;
    }
}