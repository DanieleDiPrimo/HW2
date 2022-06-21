<?php

namespace App\Http\Controllers; 

use App\Models\User; 
use App\Models\Post;
use App\Models\GiocaConMe;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Http;

class RichiesteController extends Controller{

    public function simpleView(){
        if(session('username')){
            return view('richieste'); 
        }else
            return redirect('login'); 
    }

    public function getRichieste(){
        
        return GiocaConMe::query() -> where('user_proprietario', session('username')) -> get(); 

    }



}


?>