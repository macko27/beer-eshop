<?php

namespace App\Models;

use App\Core\Model;

class Beer extends Model
{
    protected ?int $id = null;
    protected ?string $nazov;
    protected ?string $styl;
    protected ?string $druh;
    protected ?int $cena;
    protected ?int $stupen;
    protected ?string $pivovar;
    protected ?string $popis;
    protected ?string $obrazok;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getNazov(): ?string
    {
        return $this->nazov;
    }

    public function setNazov(?string $nazov): void
    {
        $this->nazov = $nazov;
    }

    public function getStyl(): ?string
    {
        return $this->styl;
    }

    public function setStyl(?string $styl): void
    {
        $this->styl = $styl;
    }

    public function getDruh(): ?string
    {
        return $this->druh;
    }

    public function setDruh(?string $druh): void
    {
        $this->druh = $druh;
    }

    public function getCena(): ?int
    {
        return $this->cena;
    }

    public function setCena(?int $cena): void
    {
        $this->cena = $cena;
    }

    public function getStupen(): ?int
    {
        return $this->stupen;
    }

    public function setStupen(?int $stupen): void
    {
        $this->stupen = $stupen;
    }

    public function getPivovar(): ?string
    {
        return $this->pivovar;
    }

    public function setPivovar(?string $pivovar): void
    {
        $this->pivovar = $pivovar;
    }

    public function getPopis(): ?string
    {
        return $this->popis;
    }

    public function setPopis(?string $popis): void
    {
        $this->popis = $popis;
    }

    public function getObrazok(): ?string
    {
        return $this->obrazok;
    }

    public function setObrazok(?string $obrazok): void
    {
        $this->obrazok = $obrazok;
    }


}