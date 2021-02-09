<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Buku;
use App\Rak;
use App\Kategori;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    function show(Request $request) {
        $search = $request -> input("search");
        $kolom = $request -> input("kolom");
        $urutan = $request -> input("urutan");
        $btn = $request -> input("btn");

        if ($btn == '1' && $search != "" && $kolom == "" && $urutan == "") {
            $data_buku = Buku::where("judul", "like", "%".$search."%")
                                    -> orderBy("id", "asc")
                                    ->paginate(5);
        } elseif ($btn == '1'  && $kolom != "" && $urutan != "" && $search == "") {
            $data_buku = Buku::orderBy($kolom, $urutan)
                                    ->paginate(5);
        } elseif ($btn == '1' && $kolom != "" && $urutan == "" && $search == "")  {
            $data_buku = Buku::orderBy($kolom, "asc")
                                    ->paginate(5);
        } elseif ($btn == '1' && $kolom == "" && $urutan != "" && $search == "")  {
            $data_buku = Buku::orderBy("id", $urutan)
                                    ->paginate(5);
        } else {
            $data_buku = Buku::paginate(5);
        }

        return view('perpus.admin-buku')
            ->with("data_buku",$data_buku);
    }

    function create(){
        $data_kategori = Kategori::all();
        $data_rak = Rak::all();
        return view('perpus.create-buku')
                ->with("data_kategori", $data_kategori)
                ->with("data_rak", $data_rak);

    }

    function save(Request $request){

        $imgName = $request->gambar_sampul->getClientOriginalName() . '-' . time() . '.' . $request->gambar_sampul->extension();
        $request->gambar_sampul->move(public_path('image'), $imgName);

        $data_buku = Buku::create([
            "judul_seri" => $request -> input("seri"),
            "judul" => $request -> input("judul"),
            "edisi" => $request -> input("edisi"),
            "slug" => $request -> input("slug"),
            "gambar_sampul" => $imgName,
            "kategori_id" => $request -> input("kategori"),
            "rak_id" => $request -> input("rak")
        ]);

        if($data_buku) {
            return redirect(url("buku"))
                ->with("status", "Sukses memproses.");
        } else {
            return redirect(url("buku"))
                ->with("status", "Gagal memproses.");
        }
    }

    function edit($id) {
        $data_buku = Buku::find($id);
        $data_kategori = Kategori::all();
        $data_rak = Rak::all();
        return view('perpus.edit-buku')
            ->with("data_buku", $data_buku)
            ->with("data_kategori", $data_kategori)
            ->with("data_rak", $data_rak);
    }

    function update($id, Request $request) {

        $imgName = $request->gambar_sampul->getClientOriginalName() . '-' . time() . '.' . $request->gambar_sampul->extension();
        $request->gambar_sampul->move(public_path('image'), $imgName);

        $data_kategori= Kategori::all();
        $data_rak = Rak::all();
        $data_buku = Buku::find($id);
        $data_buku -> judul_seri = $request -> input("seri");
        $data_buku -> judul = $request -> input("judul");
        $data_buku -> edisi = $request -> input("edisi");
        $data_buku -> slug = $request -> input("slug");
        $data_buku -> gambar_sampul = $imgName;
        $data_buku -> kategori_id = $request -> input("kategori");
        $data_buku -> rak_id = $request -> input("rak");
        $data_buku -> save();
        return redirect(url("buku"));
    }

    function delete($id) {
        $data_buku = Buku::find($id);
        $data_buku -> delete();
        return redirect(url('buku'));
    }

    function lokasi() {
        $data_buku = Buku::select('buku.id', 'buku.judul_seri', 'buku.judul', 'buku.edisi', 'kategori.nama_kategori', 'rak.nama_lokasi', 'rak.kode_lokasi', 'rak.nomor_lokasi')
                            ->join('kategori', 'buku.kategori_id', '=', 'kategori.id')
                            ->join('rak', 'buku.rak_id', '=', 'rak.id')
                            ->paginate(7);

        return view('perpus.join-buku')
            -> with("data_buku", $data_buku);
    }
}

