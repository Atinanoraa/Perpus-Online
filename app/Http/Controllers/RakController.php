<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rak;
use App\Kategori;
use Illuminate\Support\Facades\DB;

class RakController extends Controller
{
    function list(Request $request){
        $ordering = $request -> input("ordering");
        $urutan = $request -> input ("urutan");
        $search = $request -> input("search");
        $filter = $request -> input("filter");

            if($filter=="1" && $search==""){
                $data_rak = Rak::where("nama_lokasi","like","%".$search."%")
                                        ->orderBy($ordering, $urutan)->paginate(5);
            }
            elseif($filter=="1" && $urutan=='' && $ordering==''){
                $data_rak = Rak::where("nama_lokasi","like","%".$search."%")
                                        ->orderBy("nama_lokasi", 'asc')->paginate(5);
            }
            elseif($filter=="1" && $ordering==""){
                $data_rak = Rak::where("nama_lokasi","like","%".$search."%")
                                        ->orderBy("nama_lokasi", $urutan)->paginate(5);
            }
            elseif($filter=="1" && $search!=""){
                $data_rak = Rak::where("nama_lokasi","like","%".$search."%")
                                        ->orderBy($ordering, $urutan)->paginate(5);
            }
            else{
                $data_rak = Rak::paginate(5);
            }
            return view('perpus.rak-list')
            ->with('data_rak', $data_rak);

    }

    function create(){
        return view('perpus.rak-create');
    }

    function save(Request $request){
        $data_rak = Rak::create([
            "nama_lokasi"=>$request->input("nama_lokasi"),
            "kode_lokasi"=>$request->input("kode_lokasi"),
            "nomor_lokasi"=>$request->input("nomor_lokasi"),
        ]);

        if($data_rak){
            return redirect(url("rak"))
            ->with("status","sukses");
        }else{
            return redirect(url("rak"))
            ->with("status","gagal");
        }
    }

    function edit($id){
        $data_rak = Rak::find($id);
        return view("perpus.rak-edit")
        ->with("data_rak", $data_rak);
    }

    function update($id, Request $request){
        $data_rak = Rak::find($id);
        $data_rak ->nama_lokasi = $request->input("nama_lokasi");
        $data_rak ->kode_lokasi = $request->input("kode_lokasi");
        $data_rak ->nomor_lokasi = $request->input("nomor_lokasi");

        {
        $data_rak->save();
        return redirect (url("rak"));
        }
    }

    function delete($id){
        $data_rak = Rak::find($id);
        $data_rak-> delete();
        return redirect (url("rak"));
    }

}
