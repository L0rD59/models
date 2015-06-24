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
use Dunglas\EcommerceBundle\Model\BrandInterface;
use Dunglas\EcommerceBundle\Model\ImageObjectInterface;

/**
 * {@inheritdoc}
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 *
 * @ORM\Entity
 */
class Brand extends Thing implements BrandInterface
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
     * @var ImageObjectInterface An associated logo.
     *
     * @ORM\ManyToOne(targetEntity="ImageObjectInterface")
     */
    private $logo;

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
     * Sets logo.
     *
     * @param ImageObjectInterface $logo
     *
     * @return $this
     */
    public function setLogo(ImageObjectInterface $logo = null)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Gets logo.
     *
     * @return ImageObjectInterface
     */
    public function getLogo()
    {
        return $this->logo;
    }
}
