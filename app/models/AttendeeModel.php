<?php

namespace App\Models;

use App\Entity\Attendee;

class AttendeeModel extends AbstractModel
{
    public function __construct()
    {
        $this->entityName = Attendee::class;
        parent::__construct();
    }
}
