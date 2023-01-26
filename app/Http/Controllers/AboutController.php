<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use PhpParser\Node\Stmt\TryCatch;

class AboutController extends Controller
{
    //
    public function index(){
        // $responsePost = Http::post('http://119.2.50.173:6006/token/',[
        //     'username'=> 'admin',
        //     'password'=>'admin'
        // ]);

        //  //ambilToken
        //  $responseToken = $responsePost->json();
        //  $token = $responseToken['access'];
 
        //  //lokasi
        //  $responseGet = Http::withToken($token, 'Bearer')->get('http://119.2.50.173:6006/api/ambulans');
        //  $dataAmbulan = $responseGet->json();
        //  $location= $dataAmbulan['data'];

        //  dd( json_encode($location));

        //galeri
        $responseGaleri = Http::get('http://119.2.50.170:9094/admin-aha/api/ambulance-hebat/galeri');
        $galeriData = $responseGaleri->json();
        $galeri = $galeriData['data'];

        $responseLokasi = Http::get('http://127.0.0.1:8000/api/track-ambulance');
        $lokasiData = $responseLokasi->json();
        $location = $lokasiData['location'];

        // dd(json_decode($galeri));
       try{
        
        return view('about.about', [
            'location' => json_encode($location),
            'galeri'=>$galeri
        ]);

       }catch(Exception $e){
          return redirect()->back()->withErrors('error', 'Tidak bisa load sementara');
       }
       
    }
}
