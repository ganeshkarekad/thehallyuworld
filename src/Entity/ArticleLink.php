<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleLinkRepository")
 */
class ArticleLink
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Article", inversedBy="articleLinks")
     * @ORM\JoinColumn(nullable=false)
     */
    private $article;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $iTunes;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $appleMusic;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $googlePlay;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $saavn;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $youTube;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ytMusic;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $gaana;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $wynk;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updatedAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArticle(): ?Article
    {
        return $this->article;
    }

    public function setArticle(?Article $article): self
    {
        $this->article = $article;

        return $this;
    }

    public function getITunes(): ?string
    {
        return $this->iTunes;
    }

    public function setITunes(string $iTunes): self
    {
        $this->iTunes = $iTunes;

        return $this;
    }

    public function getAppleMusic(): ?string
    {
        return $this->appleMusic;
    }

    public function setAppleMusic(?string $appleMusic): self
    {
        $this->appleMusic = $appleMusic;

        return $this;
    }

    public function getGooglePlay(): ?string
    {
        return $this->googlePlay;
    }

    public function setGooglePlay(?string $googlePlay): self
    {
        $this->googlePlay = $googlePlay;

        return $this;
    }

    public function getSaavn(): ?string
    {
        return $this->saavn;
    }

    public function setSaavn(?string $saavn): self
    {
        $this->saavn = $saavn;

        return $this;
    }

    public function getYouTube(): ?string
    {
        return $this->youTube;
    }

    public function setYouTube(?string $youTube): self
    {
        $this->youTube = $youTube;

        return $this;
    }

    public function getYtMusic(): ?string
    {
        return $this->ytMusic;
    }

    public function setYtMusic(?string $ytMusic): self
    {
        $this->ytMusic = $ytMusic;

        return $this;
    }

    public function getGaana(): ?string
    {
        return $this->gaana;
    }

    public function setGaana(?string $gaana): self
    {
        $this->gaana = $gaana;

        return $this;
    }

    public function getWynk(): ?string
    {
        return $this->wynk;
    }

    public function setWynk(?string $wynk): self
    {
        $this->wynk = $wynk;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
