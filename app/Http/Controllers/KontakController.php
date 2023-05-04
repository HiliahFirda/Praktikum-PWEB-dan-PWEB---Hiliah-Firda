<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KontakController extends Controller{

    public function index(){
      return view('kontak');
    }

    public function store(Request $request){
      $validatedKontak = $request->validate([
          "name" =>"required|min:4|max:225",
          "email" =>"required|email:dns",
          "subject" =>"required|min:4|max:225",
          "message" =>"required"
      ],
      [
          "name.required" =>"Nama wajib diisi",
          "email.required" =>"Email wajib diisi",
          "subject.required" =>"Subject wajib diisi",
          "message.required" =>"Pesan wajib diisi",
      ]);

      return redirect()->back();

    }
}