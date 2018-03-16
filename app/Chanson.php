<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chanson extends Model
{
    protected $table = 'chanson';
    
    public function utilisateur(){
        return $this->belongsTo('App\User', 'utilisateur_id');
    }
}
