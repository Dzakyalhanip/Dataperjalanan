<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Gambar;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        //
        $Admin = Admin::all();
        return view('admin/admin',compact('Admin'));
    }
    public function data()
    {
        //
        $Admin = Admin::all();
        return view('admin/table',compact('Admin'));
    }
    public function delete(Request $request,$id){
        $Admin = Admin::find($id);
        $Admin->delete();
        return redirect('/admin.data')->with('status','data berhasil di hapus');

    }
    public function edit($id){
        $Admin = Admin::where('id' , $id)->first();
        return view('admin.form' , compact('Admin'));
    }
    
    public function update(Request $request,$id){
        $Admin = Admin::find($id);
        $Admin->tanggal = $request->tanggal;
        $Admin->waktu = $request->waktu;
        $Admin->lokasi = $request->lokasi;
        $Admin->suhu_tubuh = $request->suhu_tubuh;
        // $Admin->role = $request->role;



        $Admin->save();

        return redirect('/admin')->with('statusedit','data berhasil di ubah');
        
    }
}
