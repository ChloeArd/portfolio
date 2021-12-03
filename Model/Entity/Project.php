<?php
namespace Chloe\portfolio\Model\Entity;

class Project {

    private ?int $id;
    private ?string $title;
    private ?string $description;
    private ?string $picture1;
    private ?string $picture2;
    private ?string $link;

    /**
     * @param int|null $id
     * @param string|null $title
     * @param string|null $description
     * @param string|null $picture1
     * @param string|null $picture2
     * @param string|null $link
     */
    public function __construct(?int $id = null, ?string $title = null, ?string $description = null, ?string $picture1 = null, ?string $picture2 = null, ?string $link = null) {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->picture1 = $picture1;
        $this->picture2 = $picture2;
        $this->link = $link;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): ?int {
        $this->id = $id;
        return $id;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * @param string|null $title
     */
    public function setTitle(?string $title): ?string {
        $this->title = $title;
        return $title;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): ?string {
        $this->description = $description;
        return $description;
    }

    /**
     * @return string|null
     */
    public function getPicture1(): ?string {
        return $this->picture1;
    }

    /**
     * @param string|null $picture1
     */
    public function setPicture1(?string $picture1): ?string {
        $this->picture1 = $picture1;
        return $picture1;
    }

    /**
     * @return string|null
     */
    public function getPicture2(): ?string {
        return $this->picture2;
    }

    /**
     * @param string|null $picture2
     */
    public function setPicture2(?string $picture2): ?string {
        $this->picture2 = $picture2;
        return $picture2;
    }

    /**
     * @return string|null
     */
    public function getLink(): ?string {
        return $this->link;
    }

    /**
     * @param string|null $link
     */
    public function setLink(?string $link): ?string {
        $this->link = $link;
        return $link;
    }
}