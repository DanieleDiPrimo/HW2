<?php 

namespace App\Http\Controllers; 

use App\Models\User; 
use App\Models\Post;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Http;

class ProfiloController extends Controller{

    public function simpleView(){
        if(session('username')){
            return view('/profilo'); 
        }else
            return redirect('/login'); 
    }
}


?>