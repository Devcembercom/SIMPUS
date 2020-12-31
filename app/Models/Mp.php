<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mp extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mps';
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
}
