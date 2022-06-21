<?php

namespace App\Http\Controllers; 

use App\Models\User; 
use Illuminate\Support\Facades\DB; 

class LogController extends Controller{

    public function simpleView(){
        if(session('username')){
            return redirect('home');
        }else{
            return view('login');
        }
    }

    public function controllo(){
        $request = request();
        $error = array();

        if (isset($request["username"]) && isset($request["password"])){
            //controllo lato server del login 

            if (User::query() -> where('username', $request["username"]) -> get() -> isEmpty()){
                $error[] = "L'username non esiste";
            }
            else {
                $user = User::query() -> where('username', $request["username"]) -> first();
                if ($request["password"] != $user -> password) {
                    $error[] = "Password non corretta";
                }
            }

            if(count($error) == 0){

                
                session(['username' => $request['username']]);
                return redirect('home');
      
            }else
                return view('loginErrore');
        }
    }


}

?>