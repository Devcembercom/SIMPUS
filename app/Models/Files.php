<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'files';
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

    public function getNagari()
    {
        return $this->belongsTo(Nagari::class, 'nagari');
    }
}
