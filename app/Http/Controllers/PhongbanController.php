<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Phongban;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class PhongbanController extends Controller
{
    public function GetForm(){
        return view('phongban.phongban');
    }
    public function Save(Request $request){
        $data = $request->all();
        $phongban = new Phongban();
        $phongban->tenphongban = $data['tenphongban'];
        $phongban->id_donvi = $data['id_donvi'];
        $phongban->id_loaikhenthuong = $data['id_loaikhenthuong'];
        $phongban->save();

        session::put('message','Thêm phòng ban thành công!');
        return redirect::to('/getformphongban');
    }

    public function getshowallphongban()
    {
        $showallphongban = Phongban::orderBy('id','ASC')->get();
        return view('phongban.getshowallphongban')->with('showallphongban',$showallphongban);
    }

    public function getformeditphongban($idphongban)
    {
        $editphongban =  Phongban::find($idphongban);
        return view('phongban.getformeditphongban')->with('editphongban',$editphongban);
    }

    public function updatephongban(Request $request, $idphongban)
    {
        $data = $request->all();
        $update = Phongban::find($idphongban);
        $update->tenphongban = $data['tenphongban'];
        $update->id_donvi = $data['id_donvi'];
        $update->id_loaikhenthuong = $data['id_loaikhenthuong'];
        $update->Save();

        session::put('message','Update Phòng ban mới thành công!');
        return redirect('/getshowallphongban');
    }

    public function getdeletephongban($idphongban)
    {
        DB::table('tb_phongban')->where('id',$idphongban)->delete();
        Session::put('message','Xóa phòng ban thành công');
        return Redirect::to('/getshowallphongban');
    }

}