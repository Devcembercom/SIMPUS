<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menus extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'menuses';
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function dajor()
    {
        return $this->belongsTo(Dajor::class);
    }
}
