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
use Dunglas\EcommerceBundle\Model\ProductModelInterface;

/**
 * {@inheritdoc}
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 *
 * @ORM\Entity
 */
class ProductModel extends Product implements ProductModelInterface
{
    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var ProductModelInterface A pointer to a base product from which this product is a variant. It is safe to infer that the variant inherits all product features from the base model, unless defined locally. This is not transitive.
     *
     * @ORM\OneToOne(targetEntity="ProductModelInterface")
     */
    private $isVariantOf;

    /**
     * Sets id.
     *
     * @param int $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets isVariantOf.
     *
     * @param ProductModelInterface $isVariantOf
     *
     * @return $this
     */
    public function setIsVariantOf(ProductModelInterface $isVariantOf = null)
    {
        $this->isVariantOf = $isVariantOf;

        return $this;
    }

    /**
     * Gets isVariantOf.
     *
     * @return ProductModelInterface
     */
    public function getIsVariantOf()
    {
        return $this->isVariantOf;
    }
}
