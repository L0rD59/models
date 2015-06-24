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
use Dunglas\EcommerceBundle\Enum\DeliveryMethod;
use Dunglas\EcommerceBundle\Enum\ItemAvailability;
use Dunglas\EcommerceBundle\Enum\OfferItemCondition;
use Dunglas\EcommerceBundle\Enum\PaymentMethod;
use Dunglas\EcommerceBundle\Model\OfferInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * {@inheritdoc}
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 *
 * @ORM\Entity
 */
class Offer extends Thing implements OfferInterface
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
     * @var string The payment method(s) accepted by seller for this offer.
     *
     * @Assert\Type(type="string")
     * @Assert\Choice(callback={"PaymentMethod", "toArray"})
     * @ORM\Column(nullable=true)
     */
    private $acceptedPaymentMethod;
    /**
     * @var string The availability of this item—for example In stock, Out of stock, Pre-order, etc.
     *
     * @Assert\Type(type="string")
     * @Assert\Choice(callback={"ItemAvailability", "toArray"})
     * @ORM\Column(nullable=true)
     */
    private $availability;
    /**
     * @var \DateTime The end of the availability of the product or service included in the offer.
     *
     * @Assert\DateTime
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $availabilityEnds;
    /**
     * @var \DateTime The beginning of the availability of the product or service included in the offer.
     *
     * @Assert\DateTime
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $availabilityStarts;
    /**
     * @var string The delivery method(s) available for this offer.
     *
     * @Assert\Type(type="string")
     * @Assert\Choice(callback={"DeliveryMethod", "toArray"})
     * @ORM\Column(nullable=true)
     */
    private $availableDeliveryMethod;
    /**
     * @var string A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     *
     * @Assert\Type(type="string")
     * @ORM\Column(nullable=true)
     */
    private $category;
    /**
     * @var string A predefined value from OfferItemCondition or a textual description of the condition of the product or service, or the products or services included in the offer.
     *
     * @Assert\Type(type="string")
     * @Assert\Choice(callback={"OfferItemCondition", "toArray"})
     * @ORM\Column(nullable=true)
     */
    private $itemCondition;
    /**
     * @var float The offer price of a product, or of a price component when attached to PriceSpecification and its subtypes.
     *
     *     Usage guidelines:
     *
     *    - Use the [priceCurrency](/priceCurrency) property (with [ISO 4217 codes](http://en.wikipedia.org/wiki/ISO_4217#Active_codes) e.g. "USD") instead of including [ambiguous symbols](http://en.wikipedia.org/wiki/Dollar_sign#Currencies_that_use_the_dollar_or_peso_sign) such as '$' in the value.
     *    - Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.
     *    - Note that both [RDFa](http://www.w3.org/TR/xhtml-rdfa-primer/#using-the-content-attribute) and Microdata syntax allow the use of a "content=" attribute for publishing simple machine-readable values alongside more human-friendly formatting.
     *    - Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.
     *
     * @Assert\Type(type="float")
     * @ORM\Column(type="float", nullable=true)
     */
    private $price;
    /**
     * @var \DateTime The date when the item becomes valid.
     *
     * @Assert\DateTime
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $validFrom;
    /**
     * @var \DateTime The end of the validity of offer, price specification, or opening hours data.
     *
     * @Assert\DateTime
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $validThrough;
    /**
     * @var string The currency (in 3-letter ISO 4217 format) of the price or a price component, when attached to PriceSpecification and its subtypes.
     *
     * @Assert\Type(type="string")
     * @Assert\NotNull
     * @ORM\Column
     */
    private $priceCurrency;

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
     * Sets acceptedPaymentMethod.
     *
     * @param string $acceptedPaymentMethod
     *
     * @return $this
     */
    public function setAcceptedPaymentMethod($acceptedPaymentMethod)
    {
        $this->acceptedPaymentMethod = $acceptedPaymentMethod;

        return $this;
    }

    /**
     * Gets acceptedPaymentMethod.
     *
     * @return string
     */
    public function getAcceptedPaymentMethod()
    {
        return $this->acceptedPaymentMethod;
    }

    /**
     * Sets availability.
     *
     * @param string $availability
     *
     * @return $this
     */
    public function setAvailability($availability)
    {
        $this->availability = $availability;

        return $this;
    }

    /**
     * Gets availability.
     *
     * @return string
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Sets availabilityEnds.
     *
     * @param \DateTime $availabilityEnds
     *
     * @return $this
     */
    public function setAvailabilityEnds(\DateTime $availabilityEnds = null)
    {
        $this->availabilityEnds = $availabilityEnds;

        return $this;
    }

    /**
     * Gets availabilityEnds.
     *
     * @return \DateTime
     */
    public function getAvailabilityEnds()
    {
        return $this->availabilityEnds;
    }

    /**
     * Sets availabilityStarts.
     *
     * @param \DateTime $availabilityStarts
     *
     * @return $this
     */
    public function setAvailabilityStarts(\DateTime $availabilityStarts = null)
    {
        $this->availabilityStarts = $availabilityStarts;

        return $this;
    }

    /**
     * Gets availabilityStarts.
     *
     * @return \DateTime
     */
    public function getAvailabilityStarts()
    {
        return $this->availabilityStarts;
    }

    /**
     * Sets availableDeliveryMethod.
     *
     * @param string $availableDeliveryMethod
     *
     * @return $this
     */
    public function setAvailableDeliveryMethod($availableDeliveryMethod)
    {
        $this->availableDeliveryMethod = $availableDeliveryMethod;

        return $this;
    }

    /**
     * Gets availableDeliveryMethod.
     *
     * @return string
     */
    public function getAvailableDeliveryMethod()
    {
        return $this->availableDeliveryMethod;
    }

    /**
     * Sets category.
     *
     * @param string $category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Gets category.
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
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
     * Sets price.
     *
     * @param float $price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Gets price.
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets validFrom.
     *
     * @param \DateTime $validFrom
     *
     * @return $this
     */
    public function setValidFrom(\DateTime $validFrom = null)
    {
        $this->validFrom = $validFrom;

        return $this;
    }

    /**
     * Gets validFrom.
     *
     * @return \DateTime
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * Sets validThrough.
     *
     * @param \DateTime $validThrough
     *
     * @return $this
     */
    public function setValidThrough(\DateTime $validThrough = null)
    {
        $this->validThrough = $validThrough;

        return $this;
    }

    /**
     * Gets validThrough.
     *
     * @return \DateTime
     */
    public function getValidThrough()
    {
        return $this->validThrough;
    }

    /**
     * Sets priceCurrency.
     *
     * @param string $priceCurrency
     *
     * @return $this
     */
    public function setPriceCurrency($priceCurrency)
    {
        $this->priceCurrency = $priceCurrency;

        return $this;
    }

    /**
     * Gets priceCurrency.
     *
     * @return string
     */
    public function getPriceCurrency()
    {
        return $this->priceCurrency;
    }
}
