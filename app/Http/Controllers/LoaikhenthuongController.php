<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Loaikhenthuong;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class LoaikhenthuongController extends Controller
{
    public function GetForm(){
        return view('loaikhenthuong.loaikhenthuong');
    }
    public function Save(Request $request)
    {
        $data = $request->all();
        $loaikhenthuong = new Loaikhenthuong();
        $loaikhenthuong->tenloaikhenthuong = $data['tenloaikhenthuong'];
        $loaikhenthuong->sotienthuong = $data['sotienthuong'];
        $loaikhenthuong->id_trinhcap = $data['id_trinhcap'];
        $loaikhenthuong->save();

        Session::put('message', 'Thêm loại khen thưởng thành công');
        return redirect::to('/getformloaikhenthuong');
    }

    public function getshowallloaikhenthuong()
    {
        $showallkhenthuong = Loaikhenthuong::orderBy('id','ASC')->get();
        return view('loaikhenthuong.getshowallloaikhenthuong')->with('showallkhenthuong',$showallkhenthuong);
    }

    public function getformeditloaikhenthuong($idloaikhenthuong)
    {
        $editloaikhenthuong = Loaikhenthuong::find($idloaikhenthuong);
        return view('loaikhenthuong.getformeditloaikhenthuong')->with('editloaikhenthuong',$editloaikhenthuong);
    }

    public function updateloaikhenthuong(Request $request,$idloaikhenthuong){
        $data = $request->all();
        $update = Loaikhenthuong::find($idloaikhenthuong);
        $update->tenloaikhenthuong =    $data['tenloaikhenthuong'];
        $update->sotienthuong      =    $data['sotienthuong'];
        $update->id_trinhcap       =    $data['id_trinhcap'];
        $update->save();

        session::put('message', 'Update loại khen thưởng mới thành công!');
        return Redirect::to('/getshowallloaikhenthuong');
    }

    public function getdeleteLoaikhenthuong($idloaikhenthuong)
    {
        DB::table('tb_loaikhenthuong')->where('id',$idloaikhenthuong)->delete();
        Session::put('message','Xóa loại khen thưởng thành công');
        return Redirect::to('/getshowallloaikhenthuong');
    }
}