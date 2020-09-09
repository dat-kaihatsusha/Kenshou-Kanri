<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Donvi;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class DonviController extends Controller
{
    public function GetFrom(){
        return view('donvi.donvi');
    }

    public function Save(Request $request)
    {
        $data = $request->all();
        $donvi = new Donvi();
        $donvi->madonvi = $data['madonvi'];
        $donvi->tendonvi = $data['tendonvi'];
        $donvi->diachi = $data['diachi'];
        $donvi->save();
        

        Session::put('message', 'Thêm đơn vị thành công!');
        return redirect::to('/getshowalldonvi');
    }


    public function getshowalldonvi(){
        $showalldonvi = Donvi::orderBy('id','ASC')->get();
        return view('donvi.showalldonvi',['showalldonvi'=>$showalldonvi]);
    }

    public function editdonvi($iddonvi)
    {
        $editdonvi = Donvi::find($iddonvi);
        return view('donvi.edit')->with('editdonvi',$editdonvi);
    }

    public function updatedonvi(Request $request,$iddonvi){
        $data = $request->all();
        $update = Donvi::find($iddonvi);
        $update->madonvi = $data['madonvi'];
        $update->tendonvi = $data['tendonvi'];
        $update->diachi = $data['diachi'];
        $update->save();

        // return view('donvi.z_thunghiem',['data'=>$data,'update'=>$update]);
        session::put('message', 'Update đơn vị mới thành công!');
        return Redirect::to('/getshowalldonvi');
    }

    public function getdeletedonvi($id)
    {
        DB::table('tb_donvi')->where('id',$id)->delete();
        Session::put('message','Xóa đơn vị thành công');
        return Redirect::to('/getshowalldonvi');
    }
}