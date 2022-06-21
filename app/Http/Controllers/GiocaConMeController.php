<?php 

namespace App\Http\Controllers; 

use App\Models\User; 
use App\Models\Post;
use App\Models\GiocaConMe;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Http;

class GiocaConMeController extends Controller{

    public function addInDB($user_proprietario, $titolo){

        if( GiocaConMe::query() -> where('user_proprietario', $user_proprietario) -> where('titolo', $titolo) -> where('user_main', session('username')) -> first() != NULL ){
            return 0;
        }else{
            return GiocaConMe::query() -> create([
            'user_proprietario' => $user_proprietario,
            'user_main' => session('username'), 
            'titolo' => $titolo
            ]);
        }

    }
}

?>