<?php 

namespace App\Http\Controllers; 

use App\Models\User; 
use App\Models\Post;
use App\Models\GiocaConMe;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Http;

class HomeController extends Controller{

    public function simpleView(){
        if(session('username'))
            return view('home');
        else
            return redirect('login');
    }

    public function getInfoUser(){
        
        $logged_user = User::query() -> where('username', session('username')) -> first();
        return $logged_user;

    }

    public function getApi(){
        $curl = curl_init();

        curl_setopt_array($curl, [
	    CURLOPT_URL => "https://free-to-play-games-database.p.rapidapi.com/api/games",
	    CURLOPT_RETURNTRANSFER => true,
	    CURLOPT_FOLLOWLOCATION => true,
	    CURLOPT_ENCODING => "",
	    CURLOPT_MAXREDIRS => 10,
	    CURLOPT_TIMEOUT => 30,
	    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	    CURLOPT_CUSTOMREQUEST => "GET",
	    CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: free-to-play-games-database.p.rapidapi.com",
		"X-RapidAPI-Key: 365b2de874mshfe51f22447e48ecp106154jsn1f69264eee38"
	    ],
        ]   );

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
	    echo "cURL Error #:" . $err;
        } else {
	    echo $response;
        }   
    }

    public function addPost($titolo, $id){


        $url = "https://www.freetogame.com/g/".$id."/thumbnail.jpg";
        

        if(Post::query() -> create([
            'username' => session('username'), 
            'titolo' => $titolo, 
            'url_img' => $url
        ])){
            return 20;
        }else{
            return 5;
        }

    }


     public function listaPost(){

        return Post::query() -> where('username' , session('username')) -> get();

    }

    public function rimuoviPost($titolo){

        if(GiocaConMe::query() -> where('user_proprietario', session('username')) -> where('titolo', $titolo) -> get()){
            GiocaConMe::query() -> where('user_proprietario', session('username')) -> where('titolo', $titolo) -> delete(); 
        } 

        Post::query() -> where('username', session('username')) -> where ('titolo' , $titolo) -> delete();

    }



}

?>