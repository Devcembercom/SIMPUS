<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anemia extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'anemias';
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
}
