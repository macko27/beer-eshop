<?php

namespace App\Models;

use App\Core\Model;

class Review extends Model
{
    protected ?int $id = null;
    protected ?string $userLogin;
    protected ?int $beerId;
    protected ?string $text;
    protected ?int $numberOfStars;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getUserLogin(): ?string
    {
        return $this->userLogin;
    }

    public function setUserLogin(?string $userLogin): void
    {
        $this->userLogin = $userLogin;
    }

    public function getBeerId(): ?int
    {
        return $this->beerId;
    }

    public function setBeerId(?int $beerId): void
    {
        $this->beerId = $beerId;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): void
    {
        $this->text = $text;
    }

    public function getNumberOfStars(): ?int
    {
        return $this->numberOfStars;
    }

    public function setNumberOfStars(?int $numberOfStars): void
    {
        $this->numberOfStars = $numberOfStars;
    }
}