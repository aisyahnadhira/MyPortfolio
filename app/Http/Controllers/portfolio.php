<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class portfolio extends Controller
{
    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function portfolio(){
        return view('portfolio');
    }

    public function contact(){
        return view('contact');
    }

    public function tambahPesan(Request $request){
        $validatedData = $request-> validate([
            'nama' => 'required',
            'nomer' => 'required',
            'email' => 'required',
            'subjek' => 'required',
            'pesan' => 'required',
            ]);

            DB::table('contact')->insert([
                'nama' => request()->nama,
                'nomer' => request()->nomer,
                'email' => request()->email,
                'subjek' => request()->subjek,
                'pesan' => request()->pesan,
                'created_at' => now(),
                'updated_at' => now(),

            ]);
            return redirect('/home')->with('success', 'Message added successfully');
    }
}
