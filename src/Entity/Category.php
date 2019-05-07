<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $label;

    /**
     * @var
     *
     * @ORM\OneToMany(targetEntity="App\Entity\MenuItem", mappedBy="category")
     */
    private $menuItems;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMenuItems()
    {
        return $this->menuItems;
    }

    /**
     * @param mixed $menuItems
     */
    public function setMenuItems($menuItems): self
    {
        $this->menuItems = $menuItems;

        return $this;
    }
}
