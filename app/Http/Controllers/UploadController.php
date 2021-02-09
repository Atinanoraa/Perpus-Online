<?php

namespace App\Http\Controllers;

use App\Gambar;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(){
        $gambar = Gambar::get();

        return view('perpus.upload', ['gambar' => $gambar]);
    }
    public function proses_upload(Request $request){
        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'keterangan' => 'required',
        ]);

        //menyimpan foto
        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();

        //folder hasil upload gambar
        $tujuan_upload = 'data_file'; //nama folder tempat gambar
        $file->move($tujuan_upload,$file->getClientOriginalName());

        Gambar::create([
            'file' => $nama_file,
            'keterangan' => $request->keterangan,
        ]);
        return redirect()->back();
    }
}
