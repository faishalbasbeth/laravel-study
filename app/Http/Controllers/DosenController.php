<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index(){
    	
    	$nama = "Faishal Basbeth";
    	$pelajaran = ["Algo I", "Algo II", "Algo III"];
    	return view('biodata',['nama' => $nama, 'matkul' => $pelajaran]);
    }
}
