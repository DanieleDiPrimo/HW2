<?php 

namespace App\Http\Controllers; 

use App\Models\User; 
use Illuminate\Support\Facades\DB; 

class RegController extends Controller{
    public function simpleView(){
        if(session('username')){
            return redirect('home');
        }else{
            return view('registrazione');
        }
        
    }

    public function createNewUser(){
        $request = request();
        $error = array();
        

        if (isset($request["nome"]) && isset($request["cognome"]) && isset($request["email"]) && isset($request["username"]) && isset($request["password"])){
  
        

            if(!preg_match('/^[a-zA-Z0-9_]{1,15}$/', $request['username'])){
                $error[] =  "L'username non rispetta il pattern";   
            }
            
            if (User::query() -> where('username', $request["username"]) -> get() -> isNotEmpty()){
                $errors[] = "Username già in uso";
            }
            
            if(strlen($request['password']) < 8){
                $error[] = "Password troppo corta";
            }

            if(!filter_var($request['email'], FILTER_VALIDATE_EMAIL)) {
                $error[] = "Email non valida";
            }

            if (User::query() -> where('email', $request['email']) -> get() -> isNotEmpty()){
                $error[] = "Email già utilizzata";
            }

            if(count($error) == 0){
                if (User::query() -> create([
                    'username' => $request['username'],
                    'nome' => $request['nome'],
                    'cognome' => $request['cognome'],
                    'email' => $request['email'],
                    'password' => $request['password'],
                    'url_img' => $request['url_img']
                ])) {
                    return redirect('login');
                 }
            
            }else{
               return view('registrazioneErrore');
            }
        }

    }
}

?>