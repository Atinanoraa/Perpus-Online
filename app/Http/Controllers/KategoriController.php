<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Rak;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    function list(Request $request){
        $ordering = $request->input("ordering");
        $urutan = $request->input("urutan");
        $search = $request->input("search");
        $filter = $request->input("filter");
        //$rak_id = $request ->input('rak_id');

        
        if($filter == '1' && $search != "" && $ordering == "" && $urutan == "") {
            $data_kategori = Kategori::where("nama_kategori","like","%".$search."%")
                                    ->orderBy("id", "asc")->paginate(5);
        } elseif($filter == '1'  && $ordering != "" && $urutan != "" && $search == "") {
            $data_kategori = Kategori::orderBy($ordering, $urutan)->paginate(5);
        } elseif($filter == '1' && $ordering != "" && $urutan == "" && $search == "") {
            $data_kategori = Kategori::orderBy($ordering, "asc")->paginate(5);
        } elseif($filter == '1' && $ordering == "" && $urutan != "" && $search == "") {
            $data_kategori = Kategori::orderBy("id", $urutan)->paginate(5);
        } else {
            $data_kategori = DB::table('kategori')
            ->join('rak', 'rak.id', '=', 'kategori.rak_id')
            ->select('rak.*', 'kategori.*')
            ->paginate(5);
        }

        // $data_kategori = DB::table('kategori')
        //     ->join('rak', 'rak.id', '=', 'kategori.rak_id')
        //     ->select('rak.*', 'kategori.*')
        //     ->paginate(5);

        return view('perpus.kategori-list')
            ->with("data_kategori", $data_kategori);
    }

    function create(){
        $data_rak = Rak::all();
        return view("perpus.kategori-create")
            ->with('data_rak', $data_rak);
    }
    function save(Request $request){
        $data_kategori= Kategori::create([
            "nama_kategori" =>$request-> input("nama_kategori"),
            "keterangan" =>$request->input ("keterangan"),
            "slug" =>$request->input ("slug"),
            "gambar_sampul" =>$request->input ("gambar_sampul"),
            "rak_id" =>$request->input ("rak_id")
        ]);

            // dd($request->input ("rak_id"));
        // if($data_kategori){
            return redirect(url("kategori"))
            ->with("status","berhasil");
        // }else{
        //     return redirect(url("kategori"))
        //     ->with("status","gagal");
        // }
    }
    function edit($id){
        $data_kategori = Kategori::find($id);
        $data_rak = Rak::all();
        return view ("perpus.kategori-edit")
        ->with("data_kategori", $data_kategori)
        ->with('data_rak', $data_rak);
    }

    function update($id, Request $request){
        $data_kategori = Kategori::find($id);
        $data_kategori->nama_kategori = $request->input("nama_kategori");
        $data_kategori->keterangan = $request->input("keterangan");
        $data_kategori->slug = $request->input("slug");
        $data_kategori->gambar_sampul = $request->input("gambar_sampul");
        $data_kategori->rak_id = $request->input("rak_id");
    {
        $data_kategori->save();
        return redirect(url("kategori"));
    }
    }
    function delete($id){
        $data_kategori = Kategori::find($id);
        $data_kategori-> delete();
        return redirect(url("kategori"));
    }
}
