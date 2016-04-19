<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'media';

    public function author() {
        return $this->hasOne('App\Models\User', 'id', 'author_id');
    }

    public function responsible() {
        return $this->belongsToMany('App\Models\User');
    }
}
