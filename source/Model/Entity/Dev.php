<?php
namespace Chloe\Portfolio\Model\Entity;

class Dev {

    private ?int $id;
    private ?string $name;
    private ?string $categorie;

    /**
     * @param int|null $id
     * @param string|null $name
     */
    public function __construct(?int $id = null, ?string $name = null, ?string $categorie = null) {
        $this->id = $id;
        $this->name = $name;
        $this->categorie = $categorie;
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
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): ?string {
        $this->name = $name;
        return $name;
    }

    /**
     * @return string|null
     */
    public function getCategorie(): ?string {
        return $this->categorie;
    }

    /**
     * @param string|null $categorie
     */
    public function setCategorie(?string $categorie): ?string {
        $this->categorie = $categorie;
        return $categorie;
    }
}