<?php

namespace App\Entity;

use App\Repository\ScrapPageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ScrapPageRepository::class)]
class ScrapPage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $body = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeInterface $created_at = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $updated_at = null;

    #[ORM\OneToMany(mappedBy: 'scrap_page', targetEntity: Picture::class, orphanRemoval: true)]
    private Collection $picture;

    public function __construct()
    {
        $this->picture = new ArrayCollection();
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getBody(): ?string
    {
        return $this->body;
    }

    public function setBody(string $body): self
    {
        $this->body = $body;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * @return Collection<int, Picture>
     */
    public function getPicture(): Collection
    {
        return $this->picture;
    }

    public function addPicture(Picture $picture): self
    {
        if (!$this->picture->contains($picture)) {
            $this->picture->add($picture);
            $picture->setScrapPage($this);
        }

        return $this;
    }

    public function removePicture(Picture $picture): self
    {
        if ($this->picture->removeElement($picture)) {
            // set the owning side to null (unless already changed)
            if ($picture->getScrapPage() === $this) {
                $picture->setScrapPage(null);
            }
        }

        return $this;
    }

    public static function dataTableList($scrap_pages, $recordsTotal, $draw, $super_admin = false) {
        $data = [];
        foreach ($scrap_pages as $scrap_page) {
            $row = [
              $scrap_page->id, // ID
              $scrap_page->title, // Title
              $scrap_page->description, // Description
              $scrap_page->created_at->format('Y-m-d H:i:s'), // Date Added
              $scrap_page->updated_at->format('Y-m-d H:i:s'), // Last Updated
            ];

            if ($super_admin) {
              $row[] = /* html */ '<a class="btn btn-danger" href="/scrap_page/delete/' . $scrap_page->id . '">Delete</a>'; // Actions
            } else {
              $row[] = ''; // Actions - None for non admin users
            }

            $data[] = $row;
        }

        return [
          'draw' =>(int) $draw, // it is recommended practice to force cast this to int
          'data' => $data,
          'recordsTotal' => $recordsTotal,
          'recordsFiltered' => $recordsTotal,
          ];
    }
}
