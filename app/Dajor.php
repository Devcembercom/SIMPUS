<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dajor extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dajors';
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function menus()
    {
        return $this->hasMany(menus::class,'jorong_id');
    }
}
