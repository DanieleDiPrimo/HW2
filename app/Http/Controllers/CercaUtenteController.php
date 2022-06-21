<?php

namespace App\Http\Controllers; 

use App\Models\User; 
use App\Models\Post;
use App\Models\GiocaConMe;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Http;


class CercaUtenteController extends Controller{

    public function simpleView(){

        if(session('username')){
            return view('cerca'); 
        }else  
            return redirect('login'); 

    }

    public function getInfoByUsername($username){

        return Post::query() -> where('username', $username) -> get();

    }


}


?> 