<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IdentitasPersalinan extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'identitas_persalinan';
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function getTglPartus()
    {
        return date('d/m/Y', strtotime($this->tgl_partus));
    }

    public function getPartograf()
    {
        if ($this->partograf == '1') {
            return 'Ada';
        } else {
            return 'Tidak';
        }
    }
}
