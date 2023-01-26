<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use Exception;
use Illuminate\Support\Facades\Validator;


class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kontak.contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = Validator::make(
            $request->all(),
            [
            'name'=>'required|alpha|max:25',
            'email'=>'required|email:rfc,dns|unique:users',
            'subjek'=>'required|string|max:25',
            'pesan'=>'required|string|max:300',
            ],
            [
            'name' => 'Nama Tidak Boleh Kosong',
            'email'=>'Email Tidak Boleh Kosong dan valid',
            'subjek'=> 'Subjek Tidak Boleh Kosong',
            'pesan'=>'Pesan Tidak Boleh Kosong'
            ]
        );

        if($validatedData->fails()){
            return redirect('/kontak-kami')->withErrors($validatedData->getMessageBag())->withInput();
        }
        else{
            $keluhan = [
                'name' => $request->name,
                'email' => $request->email,
                'subjek' => $request->subjek,
                'pesan' => $request->pesan,
            ];
        }
        
        if(Feedback::create($keluhan)){
            return redirect('/kontak-kami')->with('success','masukan dan saran sudah kami diterima, mohon ditunggu');
        }
        else{
            return redirect()->back()->with('error', 'silakan cek kembali');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
