<?php

namespace App\Entity;

use App\Repository\CartProductRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CartProductRepository::class)]
class CartProduct
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $productQuantity = null;

    #[ORM\ManyToOne(inversedBy: 'cartProducts')]
    private ?Cart $cart = null;

    #[ORM\ManyToOne(inversedBy: 'cartProducts')]
    private ?Product $product = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductQuantity(): ?string
    {
        return $this->productQuantity;
    }

    public function setProductQuantity(?string $productQuantity): self
    {
        $this->productQuantity = $productQuantity;

        return $this;
    }

    public function getCart(): ?Cart
    {
        return $this->cart;
    }

    public function setCart(?Cart $cart): self
    {
        $this->cart = $cart;

        return $this;
    }

    public function getProduct(): ?Product
    {
        return $this->product;
    }

    public function setProduct(?Product $product): self
    {
        $this->product = $product;

        return $this;
    }
}
