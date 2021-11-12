<?php
declare(strict_types=1);

namespace Butschster\Kraken\Responses\Entities;

use JMS\Serializer\Annotation\Type;

class StatusRecentDeposits
{
    public string $method;
    public string $aclass;
    public string $asset;
    public string $refid;
    public string $txid;
    public string $info;
    public string $amount;
    public string $fee;
    public string $time;
    public string $status;

}
