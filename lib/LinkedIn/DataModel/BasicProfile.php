<?php

namespace REverse\LinkedIn\DataModel;

class BasicProfile extends Model
{
    private string $id;

    private string $localizedLastName;

    private string $localizedFirstName;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): BasicProfile
    {
        $this->id = $id;

        return $this;
    }

    public function getLocalizedLastName(): string
    {
        return $this->localizedLastName;
    }

    public function setLocalizedLastName(string $localizedLastName): BasicProfile
    {
        $this->localizedLastName = $localizedLastName;

        return $this;
    }

    public function getLocalizedFirstName(): string
    {
        return $this->localizedFirstName;
    }

    public function setLocalizedFirstName(string $localizedFirstName): BasicProfile
    {
        $this->localizedFirstName = $localizedFirstName;

        return $this;
    }
}
