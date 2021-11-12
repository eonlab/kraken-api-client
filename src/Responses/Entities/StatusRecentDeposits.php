<?php
declare(strict_types=1);

namespace Butschster\Kraken\Responses\Entities;

use Brick\Math\BigDecimal;
use JMS\Serializer\Annotation\Type;

class StatusRecentDeposits
{
    /**
     * Name of the deposit method that will be used
     */
    public string $method;

}
