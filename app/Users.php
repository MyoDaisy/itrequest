<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
    protected $table = 'users';

    protected $primaryKey = 'user_id';

    public $timestamps = FALSE;
    public $update_at = FALSE;
}
