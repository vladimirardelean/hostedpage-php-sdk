<?php

namespace Twispay\Entity\Order;

/**
 * Class OrderManaged
 *
 * @package Twispay\Entity\Order
 * @author Dragos URSU
 * @version GIT: $Id:$
 */
class OrderManaged extends OrderAbstract
{
    /** @var string $orderType */
    protected $orderType = OrderType::MANAGED;
}
