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
 * A list of possible conditions for the item.
 *
 * @see http://schema.org/OfferItemCondition Documentation on Schema.org
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class OfferItemCondition extends Enum
{
    /**
     * @var string Indicates that the item is damaged.
     */
    const DAMAGED_CONDITION = 'http://schema.org/DamagedCondition';
    /**
     * @var string Indicates that the item is new.
     */
    const NEW_CONDITION = 'http://schema.org/NewCondition';
    /**
     * @var string Indicates that the item is refurbished.
     */
    const REFURBISHED_CONDITION = 'http://schema.org/RefurbishedCondition';
    /**
     * @var string Indicates that the item is used.
     */
    const USED_CONDITION = 'http://schema.org/UsedCondition';
}
