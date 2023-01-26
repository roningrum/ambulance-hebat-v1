<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    //
    public function index(){
        //Kasus yang ditangani ambulance hebat
        $responseGet = Http::get('http://119.2.50.170:9095/dashboardNew/index.php/graph/line/ambulan_hebat?tahun=2022');
        $data= $responseGet->json();
        $dashboard= $data['datatab'];

        return view('home.home',[
            'dashboard' => json_encode($dashboard)
        ]);
    }
}
