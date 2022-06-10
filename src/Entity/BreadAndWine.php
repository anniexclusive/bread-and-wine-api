<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\BreadAndWineRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BreadAndWineRepository::class)]
#[ApiResource]
class BreadAndWine
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $title;

    #[ORM\Column(type: 'text')]
    private $bible_text;

    #[ORM\Column(type: 'text')]
    private $content;

    #[ORM\Column(type: 'text', nullable: true)]
    private $contentt;

    #[ORM\Column(type: 'string', length: 255)]
    private $further_study;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $bible_plan;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $prayer;

    #[ORM\Column(type: 'integer')]
    private $month;

    #[ORM\Column(type: 'date')]
    private $date;

    #[ORM\Column(type: 'integer')]
    private $day;

    #[ORM\Column(type: 'datetime')]
    private $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getBibleText(): ?string
    {
        return $this->bible_text;
    }

    public function setBibleText(string $bible_text): self
    {
        $this->bible_text = $bible_text;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getContentt(): ?string
    {
        return $this->contentt;
    }

    public function setContentt(?string $contentt): self
    {
        $this->contentt = $contentt;

        return $this;
    }

    public function getFurtherStudy(): ?string
    {
        return $this->further_study;
    }

    public function setFurtherStudy(string $further_study): self
    {
        $this->further_study = $further_study;

        return $this;
    }

    public function getBiblePlan(): ?string
    {
        return $this->bible_plan;
    }

    public function setBiblePlan(?string $bible_plan): self
    {
        $this->bible_plan = $bible_plan;

        return $this;
    }

    public function getPrayer(): ?string
    {
        return $this->prayer;
    }

    public function setPrayer(?string $prayer): self
    {
        $this->prayer = $prayer;

        return $this;
    }

    public function getMonth(): ?int
    {
        return $this->month;
    }

    public function setMonth(int $month): self
    {
        $this->month = $month;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getDay(): ?int
    {
        return $this->day;
    }

    public function setDay(int $day): self
    {
        $this->day = $day;

        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
