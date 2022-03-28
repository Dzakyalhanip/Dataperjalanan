<?php

namespace App\Http\Controllers;
use App\Models\Gambar;


use Illuminate\Http\Request;

class GambarController extends Controller
{
    //
    public function index()
    {
        $Gambar = Gambar::all();
        return view('user/user',compact('Gambar'));
    }

    public function simpan(Request $request)
    {
        
        $data = Gambar::create($request->all());
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('fotouser/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();

        $request->validate([
            'user_id' => 'required',      
            'gambar' => 'required',

        ]);

        // $sendgambar = $request->gambar->getClientOriginalName().'_'. time().'_'. $request->gambar->extension();
        // $request->gambar->move(public_path('images'),$sendgambar);
        Gambar::create([
            'user_id'=>$request['user_id'],
            'gambar'=>$request['gambar'],


        
        ]);
    }

        return redirect('/user')->with('status','Foto Berhasil dipost');
    }
    public function show()
    {
        $Gambar = Gambar::latest()->paginate(1);
    
        return view('user.gambar',compact('Gambar'));
    }
}
