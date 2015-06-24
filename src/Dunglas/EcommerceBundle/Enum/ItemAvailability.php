<?php

/*
 * This file is part of the Ecommerce package.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Dunglas\EcommerceBundle\Enum;

use MyCLabs\Enum\Enum;

/**
 * A list of possible product availability options.
 *
 * @see http://schema.org/ItemAvailability Documentation on Schema.org
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class ItemAvailability extends Enum
{
    /**
     * @var string Indicates that the item has been discontinued.
     */
    const DISCONTINUED = 'http://schema.org/Discontinued';
    /**
     * @var string Indicates that the item is in stock.
     */
    const IN_STOCK = 'http://schema.org/InStock';
    /**
     * @var string Indicates that the item is available only at physical locations.
     */
    const IN_STORE_ONLY = 'http://schema.org/InStoreOnly';
    /**
     * @var string Indicates that the item has limited availability.
     */
    const LIMITED_AVAILABILITY = 'http://schema.org/LimitedAvailability';
    /**
     * @var string Indicates that the item is available only online.
     */
    const ONLINE_ONLY = 'http://schema.org/OnlineOnly';
    /**
     * @var string Indicates that the item is out of stock.
     */
    const OUT_OF_STOCK = 'http://schema.org/OutOfStock';
    /**
     * @var string Indicates that the item is available for pre-order.
     */
    const PRE_ORDER = 'http://schema.org/PreOrder';
    /**
     * @var string Indicates that the item has sold out.
     */
    const SOLD_OUT = 'http://schema.org/SoldOut';
}
