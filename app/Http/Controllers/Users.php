<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Blog;

class Users extends Controller
{
    function index(Request $req)
    {
        $member = new Blog();
        $member->name = $req->name;
        $member->email = $req->email;
        $member->password = Hash::make($req->password);
        $member->phone = $req->phone;
        $member->save();
        return redirect('home');

    }
    function login(Request $req){
        $data = Blog::where('email','=',$req->email)->first();
        if($data){
            if(Hash::check($req->password,$data->password)){
                $auth = $req->input('email');
                $req->session()->put('user',$auth);
                return redirect('home');
            }else{
               return redirect('/');
            }
        }else{
            return redirect('/');
        }
    }
    
}
