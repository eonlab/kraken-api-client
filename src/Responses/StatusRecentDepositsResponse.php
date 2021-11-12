<?php
declare(strict_types=1);

namespace Butschster\Kraken\Responses;

use Butschster\Kraken\Responses\Entities\StatusRecentDeposits;

class StatusRecentDepositsResponse extends AbstractResponse
{
    public ?StatusRecentDeposits $result = null;
}
