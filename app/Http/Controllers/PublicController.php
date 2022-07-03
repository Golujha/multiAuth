<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Doctor, Patient};

class PublicController extends Controller
{
    //
    public function index(){
        return view("index");

    }
    //is function mai hum get / post dono hi karenge doctor login ke liye
    public function doctorLogin(Request $req){
        if($req->isMethod("post")){

        }
        return view("doctorLogin");

    }
    //is function mai get / post dono hi karenge patient login ke liye
    public function patientLogin(Request $req){
        if($req->isMethod("post")){

        }
        return view("patientLogin");

    }
    public function patientSignup(Request $req){

        if($req->isMethod("post")){
            $data = $req->validate([
                'name' => 'required',
                'address' => 'required',
                'contact' => 'required',
                'email' => 'required',
                'password' => 'required',
            ]);

            Patient::create($data);
            return redirect()->back();
        }

        return view("patientSignup");
    }
    public function doctorSignup(Request $req){
        if($req->isMethod("post")){
            $data = $req->validate([
                'name' => 'required',
                'address' => 'required',
                'contact' => 'required',
                'email' => 'required',
                'password' => 'required',
            ]);

            Doctor::create($data);
            return redirect()->back();
            
        }
        return view("doctorSignup");
    }
}
