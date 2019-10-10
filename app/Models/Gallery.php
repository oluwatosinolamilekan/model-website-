<?php

namespace App\Models;
use App\Traits\ModelScopes;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use ModelScopes;

     /**
     * Get all of the owning user models.
     */
  
    public function user()
    {
        return $this->belongsTo('App\Models\User')->Active();
    }
}
