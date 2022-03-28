<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datauser;
use App\Models\Gambar;
use App\Services\LogActivitiesServices\MainLogActivitiesServices;

class UserController extends Controller
{
    public function __construct(MainLogActivitiesServices $logs) {
        $this->loging = $logs; // variable name (optional)
    
    }
    
    //
    public function index()
    {
        //
        $Datauser = Datauser::latest()->paginate(100);
        return view('user/table',compact('Datauser'));
        
      
    }
    public function tambah()

    {
        $Datauser = Datauser::latest()->paginate(5);
        return view('user/form');
        // return view('client/form');
        
    }

    public function simpan(Request $request)
    {
        //
        $request->validate([
            'user_id' => 'required',      
            'tanggal' => 'required',
            'waktu' => 'required',
            'lokasi' => 'required',
            'suhu_tubuh' => 'required',

        ]);

        // $sendgambar = $request->gambar->getClientOriginalName().'_'. time().'_'. $request->gambar->extension();
        // $request->gambar->move(public_path('images'),$sendgambar);
        Datauser::create([
            'user_id'=>$request['user_id'],
            'tanggal'=>$request['tanggal'],
            'waktu'=>$request['waktu'],
            'lokasi'=>$request['lokasi'],
            'suhu_tubuh'=>$request['suhu_tubuh'],


        
        ]);
        return redirect('/user.table')->with('status','Data Berhasil Terkirim');

        $this->loging->activitylog(true,'Masukkan Data Baru');
        $catatan = new \Dzaki236\LoggingServices\FileServicesConfig('catatanperjalanan.txt'); 
        $catatan->fieldInsert(['user_id','tanggal','waktu','lokasi','suhu_tubuh'],[$request->user_id,$request->tanggal,$request->waktu, $request->lokasi,$request->suhu_tubuh]);
       
    
    }
    

    
}
