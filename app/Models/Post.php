<?php 

namespace App\Models; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Post extends Model{

    public $timestamps = false; 


    public function users(): BelongsTo{
        return $this -> belongsTo('App\Models\User', 'username'); 
    }

    public function GiocaConMe(): BelongsTo{
        return $this -> belongsTo('App\Models\GiocaConMe');
    }
    
    protected $fillable = [
        'username', 
        'titolo',
        'url_img'
    ];

}


?>