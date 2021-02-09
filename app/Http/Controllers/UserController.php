<?php

namespace App\Http\Controllers;

use App\Member;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->input("search");
        $data=$request->input("data");
        $urutan= $request->input("urutan");
        $filter=$request->input("filter");
        if($filter=='1' && $search ==''){
            $data_user= Member::where('nama_member', 'like', '%'.$search.'%')
                                    ->orderBy($data,$urutan)
                                    ->paginate(10);
        }
        elseif($filter=='1' && $search !=''){
            $data_user= Member::where('nama_member', 'like', '%'.$search.'%')
                                    ->orderBy($data,$urutan)
                                    ->paginate(10);
        }
        elseif($filter=='1' && $urutan=='' && $data==''){
            $data_user= Member::where('nama_member', 'like', '%'.$search.'%')
                                    ->orderBy('nama_member', 'asc')
                                    ->paginate(10);
        }
        else{
            $data_user=Member::paginate(10);
        }

        return view('perpus.User-List')
        ->with("data_user", $data_user);
    }
    function create(){
        return view('perpus.user');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function save(Request $request)
    {
        $data_user= Member::create([
            "nama_member" =>$request->input("nama_member"),
            "email_member" =>$request->input("email_member"),
            "no_telp" =>$request->input("no_telp"),
            "tgl_lahir" =>$request->input("tgl_lahir"),
            "alamat" =>$request->input("alamat"),
            "jk" =>$request->input("jk")
        ]);
        if($data_user){
            // return redirect(url("user"))
            // ->with("status", "sukses");
            return view("perpus.User-List");
        }
        else{
            return redirect(url("user"))
            ->with("status", "gagal");
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_user = Member::find($id);
        return view("perpus.User-Edit")
            -> with ("data_user", $data_user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data_user = Member::find($id);
        $data_user->nama_member=$request->input("nama_member");
        $data_user->email_member=$request->input("email_member");
        $data_user->no_telp=$request->input("no_telp");
        $data_user->tgl_lahir=$request->input("tgl_lahir");
        $data_user->alamat=$request->input("alamat");
        $data_user->jk=$request->input("jk");
        $data_user->save();
        return redirect(url("user"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data_user = Member::find($id);
        $data_user->delete();
        return redirect(url("user"));
    }
}
