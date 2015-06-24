<?php

/*
 * This file is part of the Ecommerce package.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Dunglas\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Dunglas\EcommerceBundle\Enum\OfferItemCondition;
use Dunglas\EcommerceBundle\Model\BrandInterface;
use Dunglas\EcommerceBundle\Model\OfferInterface;
use Dunglas\EcommerceBundle\Model\ProductInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * {@inheritdoc}
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 *
 * @ORM\MappedSuperclass
 */
abstract class Product extends Thing implements ProductInterface
{
    /**
     * @var BrandInterface The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
     *
     * @ORM\ManyToMany(targetEntity="BrandInterface")
     * @ORM\JoinTable(inverseJoinColumns={@ORM\JoinColumn(unique=true)})
     */
    private $brand;
    /**
     * @var string The color of the product.
     *
     * @Assert\Type(type="string")
     * @ORM\Column(nullable=true)
     */
    private $color;
    /**
     * @var string The depth of the item.
     *
     * @Assert\Type(type="string")
     * @ORM\Column(nullable=true)
     */
    private $depth;
    /**
     * @var string The [GTIN-13](http://apps.gs1.org/GDD/glossary/Pages/GTIN-13.aspx) code of the product, or the product to which the offer refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceeding zero. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
     *
     * @Assert\Type(type="string")
     * @ORM\Column(nullable=true)
     */
    private $gtin13;
    /**
     * @var string The [GTIN-14](http://apps.gs1.org/GDD/glossary/Pages/GTIN-14.aspx) code of the product, or the product to which the offer refers. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
     *
     * @Assert\Type(type="string")
     * @ORM\Column(nullable=true)
     */
    private $gtin14;
    /**
     * @var string The [GTIN-8](http://apps.gs1.org/GDD/glossary/Pages/GTIN-8.aspx) code of the product, or the product to which the offer refers. This code is also known as EAN/UCC-8 or 8-digit EAN. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
     *
     * @Assert\Type(type="string")
     * @ORM\Column(nullable=true)
     */
    private $gtin8;
    /**
     * @var string The height of the item.
     *
     * @Assert\Type(type="string")
     * @ORM\Column(nullable=true)
     */
    private $height;
    /**
     * @var string A predefined value from OfferItemCondition or a textual description of the condition of the product or service, or the products or services included in the offer.
     *
     * @Assert\Type(type="string")
     * @Assert\Choice(callback={"OfferItemCondition", "toArray"})
     * @ORM\Column(nullable=true)
     */
    private $itemCondition;
    /**
     * @var string The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
     *
     * @Assert\Type(type="string")
     * @ORM\Column(nullable=true)
     */
    private $mpn;
    /**
     * @var OfferInterface An offer to provide this item—for example, an offer to sell a product, rent the DVD of a movie, or give away tickets to an event.
     *
     * @ORM\ManyToMany(targetEntity="OfferInterface")
     * @ORM\JoinTable(inverseJoinColumns={@ORM\JoinColumn(unique=true)})
     */
    private $offers;
    /**
     * @var \DateTime The release date of a product or product model. This can be used to distinguish the exact variant of a product.
     *
     * @Assert\Date
     * @ORM\Column(type="date", nullable=true)
     */
    private $releaseDate;
    /**
     * @var string The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer refers.
     *
     * @Assert\Type(type="string")
     * @ORM\Column(nullable=true)
     */
    private $sku;
    /**
     * @var string The weight of the product or person.
     *
     * @Assert\Type(type="string")
     * @ORM\Column(nullable=true)
     */
    private $weight;
    /**
     * @var string The width of the item.
     *
     * @Assert\Type(type="string")
     * @ORM\Column(nullable=true)
     */
    private $width;

    /**
     * Sets brand.
     *
     * @param BrandInterface $brand
     *
     * @return $this
     */
    public function setBrand(BrandInterface $brand = null)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Gets brand.
     *
     * @return BrandInterface
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Sets color.
     *
     * @param string $color
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Gets color.
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Sets depth.
     *
     * @param string $depth
     *
     * @return $this
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;

        return $this;
    }

    /**
     * Gets depth.
     *
     * @return string
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * Sets gtin13.
     *
     * @param string $gtin13
     *
     * @return $this
     */
    public function setGtin13($gtin13)
    {
        $this->gtin13 = $gtin13;

        return $this;
    }

    /**
     * Gets gtin13.
     *
     * @return string
     */
    public function getGtin13()
    {
        return $this->gtin13;
    }

    /**
     * Sets gtin14.
     *
     * @param string $gtin14
     *
     * @return $this
     */
    public function setGtin14($gtin14)
    {
        $this->gtin14 = $gtin14;

        return $this;
    }

    /**
     * Gets gtin14.
     *
     * @return string
     */
    public function getGtin14()
    {
        return $this->gtin14;
    }

    /**
     * Sets gtin8.
     *
     * @param string $gtin8
     *
     * @return $this
     */
    public function setGtin8($gtin8)
    {
        $this->gtin8 = $gtin8;

        return $this;
    }

    /**
     * Gets gtin8.
     *
     * @return string
     */
    public function getGtin8()
    {
        return $this->gtin8;
    }

    /**
     * Sets height.
     *
     * @param string $height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Gets height.
     *
     * @return string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Sets itemCondition.
     *
     * @param string $itemCondition
     *
     * @return $this
     */
    public function setItemCondition($itemCondition)
    {
        $this->itemCondition = $itemCondition;

        return $this;
    }

    /**
     * Gets itemCondition.
     *
     * @return string
     */
    public function getItemCondition()
    {
        return $this->itemCondition;
    }

    /**
     * Sets mpn.
     *
     * @param string $mpn
     *
     * @return $this
     */
    public function setMpn($mpn)
    {
        $this->mpn = $mpn;

        return $this;
    }

    /**
     * Gets mpn.
     *
     * @return string
     */
    public function getMpn()
    {
        return $this->mpn;
    }

    /**
     * Sets offers.
     *
     * @param OfferInterface $offers
     *
     * @return $this
     */
    public function setOffers(OfferInterface $offers = null)
    {
        $this->offers = $offers;

        return $this;
    }

    /**
     * Gets offers.
     *
     * @return OfferInterface
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * Sets releaseDate.
     *
     * @param \DateTime $releaseDate
     *
     * @return $this
     */
    public function setReleaseDate(\DateTime $releaseDate = null)
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    /**
     * Gets releaseDate.
     *
     * @return \DateTime
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * Sets sku.
     *
     * @param string $sku
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * Gets sku.
     *
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Sets weight.
     *
     * @param string $weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Gets weight.
     *
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Sets width.
     *
     * @param string $width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Gets width.
     *
     * @return string
     */
    public function getWidth()
    {
        return $this->width;
    }
}
