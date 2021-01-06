<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lb1File extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'file_lb1';
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function getUser()
    {
        return $this->belongsTo(User::class, 'author');
    }
}
