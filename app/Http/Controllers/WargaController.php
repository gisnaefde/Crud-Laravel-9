<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function index(){
        $warga = Warga::all();
        return view('warga.index',compact(['warga']));//maksud dari compact yaitu agar di dalam view dapat membaca variabel $warga
    }

    public function create(){
        return view('warga.create');
    }

    public function store(Request $request){ //request digunakan untuk menangkap data yang di input dengan request
        Warga::create($request->except(['_token', 'submit']));//expect digunakan untuk tidak menyertakan _token dan submit untuk dibuat dan dimasukan kedalam database
        return redirect('/warga');
    }

    public function edit($id){
        $warga = Warga::find($id);
        return view('warga.edit', compact(['warga']));
    }

    public function update($id , Request $request){
        $warga = Warga::find($id);
        // Warga::update($request->except(['_token','submit']));
        Warga::where('id', $id)->update($request->except(['_token','submit','_method']));
        return redirect('/warga');
    }
}
