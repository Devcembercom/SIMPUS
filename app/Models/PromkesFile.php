<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PromkesFile extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'file_promkes';
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
