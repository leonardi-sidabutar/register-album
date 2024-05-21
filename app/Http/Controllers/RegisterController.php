<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model_Register;
use App\Models\Model_Kebun;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register/register');
    }

    public function registration(Request $request)
    {
        $request->validate([
            'sap'=>'required',
            'name'=>'required',
            'jabatan'=>'required',
            'hp'=>'required',
            'username'=>'required',
            'email'=>'required',
            'password'=>'required|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation'=>'required|required_with:password|same:password',
            'regional'=>'required',
            'kebun'=>'required',
            'slicekebun'=>'required',
            'namakebun'=>'required',
            'afd'=>'required',
            'afdeling'=>'required',
            'company_code'=>'required',
            'ptpn'=>'required'
        ]);

        Model_Register::create([
            'nik_sap'=>strtoupper($request->sap),
            'fullname'=>strtoupper($request->name),
            'username'=>strtoupper($request->username),
            'password'=>Hash::make($request->password),
            'nickname'=>strtoupper($request->name),
            'company_code'=>strtoupper($request->company_code),
            'kebun'=>strtoupper($request->slicekebun),
            'namakebun'=>strtoupper($request->namakebun),
            'afdeling'=>strtoupper($request->afdeling),
            'namaafdeling'=>strtoupper('AFDELING '.$request->afdeling),
            'kode_kebun'=>strtoupper($request->kebun),
            'kode_ptpn'=>strtoupper($request->regional),
            'kode_afdeling'=>strtoupper($request->afd),
            'token'=>'Lm7jEDoV-DDVZBnp-h646yQHihrHXOqFaOgDwmpRi_iI5BFZfA3fIkR6wXgB15ZqJhSzUIYWxL5s1F3cLgdyLzFwxtF0Ovdh8KlXGwuWObn9aiIInBOVUp3CHsE5oJeBQnX0j4siZrC3cjadxq4Rxbn_s3GpmoO58JX5fJIwlWM.',
            'jabatan'=>strtoupper($request->jabatan),
            'no_hp'=>$request->hp,
            'email'=>$request->email,
            'regional'=>strtoupper($request->ptpn)
        ]);

        Alert::success('Success','Akun Berhasil Didaftar!');


        return redirect()->route('register_form');
    }

    public function login(){
        return view('register/login');
    }

    public function login_act(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required',
        ]);

        $username = Model_Register::where('username',$request->input('username'))->first();

        // Check Apakah usernamenya ada
        if($username && Hash::check($request->input('password'),$username->password)){
            echo "Berhasil Login";
        }else{
            echo "Gagal Login";
        }

    }
}
