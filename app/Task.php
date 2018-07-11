<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * Task constructor.
     */

    protected $fillable = [
        'name',
        'user_id',
        'description',
    ];
}
