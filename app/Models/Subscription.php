<?php

namespace App\Models;

class Subscription
{

    public $id;
    public $chargebeeId;
    public $status;
    public $planId;

    public function __construct(int $id, string $chargebeeId, string $status, int $planId)
    {
        $this->id = $id;
        $this->chargebeeId = $chargebeeId;
        $this->status = $status;
        $this->planId = $planId;
    }

}
