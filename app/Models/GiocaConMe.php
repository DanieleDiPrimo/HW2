<?php

namespace App\Models; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class GiocaConMe extends Model{

    protected $table = 'GiocaConMe'; 

    public $timestamps = false;

    public function users(): BelongsToMany{
        return $this -> belongsToMany('App\Models\User', 'user_main'); 
    }

    public function posts(): BelongsToMany{
        return $this -> belongsToMany('App\Models\GiocaConMe', 'user_proprietario');
    }

    protected $fillable = [
        'user_proprietario', 
        'user_main',
        'titolo'
    ];

}



?>