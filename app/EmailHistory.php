<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailHistory extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'subject',
        'message',
        'created_at',
        'updated_at'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
