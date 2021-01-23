<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nagari extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'nagari';
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
}
