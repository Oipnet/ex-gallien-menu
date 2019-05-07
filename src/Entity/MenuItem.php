<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MenuItemRepository")
 */
class MenuItem
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var Menu
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Menu", inversedBy="menuItems")
     *
     */
    private $menu;

    /**
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="menuItem")
     */
    private $category;

    /**
     * @var Collection
     */
    private $categories;

    /**
     * @return Collection
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    /**
     * @param Collection $categories
     */
    public function setCategories(Collection $categories): self
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $label;

    public function __construct()
    {
        $this->categories = new ArrayCollection();
    }

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
     * @return Menu
     */
    public function getMenu(): Menu
    {
        return $this->menu;
    }

    /**
     * @param Menu $menu
     */
    public function setMenu(Menu $menu): self
    {
        $this->menu = $menu;

        return $this;
    }
}
