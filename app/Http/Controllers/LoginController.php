<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Null_;
class LoginController extends Controller
{
    
    public function index()
    {
        //
        // return "test";
        return view('auth.login');
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $data = User::where('nik',$request->nik)->first();
        // dd($data);
        if ($data != NULL) {
            if (password_verify($request->password,$data->password)) {
                # code...
                $credentials = [
                    'nik' => $request->nik,
                    'password' => $data->password,
                ];
                // dd($credentials);
                // dd(Auth::attempt();
                if (Auth::attempt($request->only('nik', 'password'))) {
                    # code...
                    return redirect('/home');
                }
            }
            # code...
        }
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    
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
