<?php

namespace App\Http\Controllers;
use App\Models\pemain_models;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class pemain_controller extends Controller
{
    //
    public function index(){
        $id_pemain =  pemain_models::all();
        $posisi_pemain = 'keeper';
        $nama_pemain = pemain_models::all()->count();
        $no_punggung = DB::table('pemain')->sum('nopunggung');
        return view('pemain.index', compact('id_pemain', 'nama_pemain', 'no_punggung', 'posisi_pemain'));
    }

    public function create(){
        return view('pemain.create');
    }

    public function store(Request $req){
        $pemain = new pemain_models;
        $pemain->idpemain = $req->idpemain;
        $pemain->namapemain = $req->namapemain;
        $pemain->nopunggung = $req->nopunggung;
        $pemain->posisi = $req->posisi;
        $pemain->save();
        return redirect('/pemain');
    }

    public function destroy($id){
        $pemain = pemain_models::find($id);
        $pemain->delete();
        return redirect('/pemain');
    }

    public function edit($id){
        $pemain = pemain_models::find($id);
        return view('pemain.update', compact('pemain'));
    }

    public function update(Request $req, $id){
        $pemain = pemain_models::find($id);
        $pemain->idpemain = $req->idpemain;
        $pemain->namapemain = $req->namapemain;
        $pemain->nopunggung = $req->nopunggung;
        $pemain->posisi = $req->posisi;
        $pemain->save();
        return redirect('/pemain');
    }
}
