<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketThread extends Model
{
    protected $table = 'ticket_thread';

    protected $primaryKey = 'ticket_thread_id';

    public $timestamps = FALSE;
}
