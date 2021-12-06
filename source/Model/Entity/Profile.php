<?php
namespace Chloe\Portfolio\Model\Entity;

class Profile {

    private ?int $id;
    private ?string $profile;

    /**
     * @param int|null $id
     * @param string|null $profile
     */
    public function __construct(?int $id = null, ?string $profile = null) {
        $this->id = $id;
        $this->profile = $profile;
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
    public function getProfile(): ?string {
        return $this->profile;
    }

    /**
     * @param string|null $profile
     */
    public function setProfile(?string $profile): ?string {
        $this->profile = $profile;
        return $profile;
    }
}