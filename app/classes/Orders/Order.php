<?php

namespace App\Orders;

use App\Dataholder;

class Order extends Dataholder

{
    protected $properties = ['id', 'drink_id', 'timestamp', 'status'];

    public function getStatus()
    {
        return $this->data['status'];
    }

    public function getDrinkId()
    {
        return $this->data['drink_id'];
    }

    public function getTimestamp()
    {
        return $this->data['timestamp'];
    }

    public function setDrinkId(int $drink_id)
    {
        $this->data['drink_id'] = $drink_id;
    }

    public function setTimestamp($timestamp)
    {
        $this->data['timestamp'] = $timestamp;
    }

    public function setStatus($status)
    {
        $this->data['status'] = $status;
    }


}