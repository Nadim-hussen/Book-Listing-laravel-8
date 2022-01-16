<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Books extends Controller
{
    function bookstore(Request $req){
         DB::table('books')->insert([
            'email'=>session('user'),
            'title'=>$req->title,
            'desc'=>$req->desc
        ]);
        return redirect('books');
    }
    function booklist(Request $req){
        if(session()->has('user')){
       $data = DB::table('books')->where('email',session('user'))->get();
       return view('booklist',['data'=>$data]);
        }else{
            return redirect('login');
        }
    }


    function showData($id){
        if(session()->has('user')){
            $data = DB::table('books')->select('id','email')->where('id',$id)->first();

            if($data->email === session('user')){
                
        $data =  DB::table('books')->select('id','email','title','desc')->where('id',$id)->first();
        return view("edit",['data'=>$data]);
        return redirect("books");
            }
            return redirect('home');
        }else{
            return redirect('login');
        }

    }


    function Update(Request $req){
       
         
                $data =  DB::table('books')->where('id',$req->id)->update([
                'email' => session('user'),
               'title' => $req->title,
                'desc' => $req->desc
                 ]);
                 return redirect('books');
      
    }

    function delete($id){
        if(session()->has('user')){
            
      $data = DB::table('books')->select('id','email')->where('id',$id)->first();
    
      if($data->email === session('user')){
          DB::table('books')->where('id',$id)->delete();
          return redirect('books');
      }
      return redirect('home');
        }else{
            return redirect('login');
        }
    }
}

