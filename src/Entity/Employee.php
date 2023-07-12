<?php

declare(strict_types=1);

namespace App\Entity;

use App\Entity\Trait\IdTrait;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Employee
{
    use IdTrait;

    #[ORM\Column(type: 'string', length: 20)]
    private string $firstName;

    #[ORM\Column(type: 'string', length: 20)]
    private string $lastName;

    #[ORM\Column(type: 'string', length: 30)]
    private string $title;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $birthDate = null;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $hireDate = null;

    #[ORM\Column(type: 'string', length: 70, nullable: true)]
    private ?string $address = null;

    #[ORM\Column(type: 'string', length: 40, nullable: true)]
    private ?string $city = null;

    #[ORM\Column(type: 'string', length: 40, nullable: true)]
    private ?string $state = null;

    #[ORM\Column(type: 'string', length: 40, nullable: true)]
    private ?string $country = null;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private ?string $postalCode = null;

    #[ORM\Column(type: 'string', length: 24, nullable: true)]
    private ?string $phone = null;

    #[ORM\Column(type: 'string', length: 24, nullable: true)]
    private ?string $fax = null;

    #[ORM\Column(type: 'string', length: 60)]
    private string $email;

    #[ORM\ManyToOne(targetEntity: self::class)]
    private ?Employee $reportsTo = null;

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getBirthDate(): ?\DateTimeInterface
    {
        return $this->birthDate;
    }

    public function setBirthDate(?\DateTimeInterface $birthDate): self
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    public function getHireDate(): ?\DateTimeInterface
    {
        return $this->hireDate;
    }

    public function setHireDate(?\DateTimeInterface $hireDate): self
    {
        $this->hireDate = $hireDate;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(?string $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(?string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getReportsTo(): ?self
    {
        return $this->reportsTo;
    }

    public function setReportsTo(?self $reportsTo): self
    {
        $this->reportsTo = $reportsTo;

        return $this;
    }
}
