<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataControll extends Controller
{
    public function index(){
        $nama = "Agung Ramadhan Gojali";
        $bio = "Saya mahasiswa Unsika Informatika";
        $hobby = ["Game","Motor","Mancing"];
        return view('biodata',['nama'=>$nama,'bio'=>$bio,'hobby'=>$hobby]);
    }
}
