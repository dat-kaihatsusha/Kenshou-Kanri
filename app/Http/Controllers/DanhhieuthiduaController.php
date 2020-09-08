<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Danhhieuthidua;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class DanhhieuthiduaController extends Controller
{
    public function GetForm(){
        return view('danhhieuthidua.danhhieuthidua');
    }
    public function Save(Request $request){
        $data = $request->all();
        $danhhieuthidua = new Danhhieuthidua();
        $danhhieuthidua->tendanhhieu = $data['tendanhhieu'];
        $danhhieuthidua->namdatdanhhieu = $data['namdatdanhhieu'];
        $danhhieuthidua->masoquyetdinh = $data['masoquyetdinh'];
        $danhhieuthidua->noicap = $data['noicap'];
        $danhhieuthidua->id_nhanvien = $data['id_nhanvien'];
        $danhhieuthidua->ghichu = $data['ghichu'];
        $danhhieuthidua->save();

        session::put('message', 'Thêm danh hiệu thi đua thành công');
        return redirect::to('/getformdanhhieuthidua');
    }

    public function getshowalldanhhieuthidua()
    {
        $showalldanhhieuthidua = Danhhieuthidua::orderBy('id','ASC')->get();
        return view('danhhieuthidua.showalldanhhieuthidua')->with('showalldanhhieuthidua',$showalldanhhieuthidua);
    }

    public function getformeditdanhhieuthidua($iddanhhieuthidua)
    {
        $editdanhhieuthidua = Danhhieuthidua::find($iddanhhieuthidua);
        return view('danhhieuthidua.editdanhhieuthidua')->with('editdanhhieuthidua',$editdanhhieuthidua);
    }

    public function updatedanhhieuthidua(Request $request,$iddanhhieuthidua){
        $data = $request->all();
        $update = Danhhieuthidua::find($iddanhhieuthidua);
        $update->tendanhhieu = $data['tendanhhieu'];
        $update->namdatdanhhieu = $data['namdatdanhhieu'];
        $update->masoquyetdinh = $data['masoquyetdinh'];
        $update->noicap = $data['noicap'];
        $update->id_nhanvien = $data['id_nhanvien'];
        $update->ghichu = $data['ghichu'];
        $update->save();

        session::put('message', 'Update Danh hiệu thi đua mới thành công!');
        return Redirect::to('/getshowalldanhhieuthidua');
    }

    public function getdeletedanhhieuthidua($id)
    {
        DB::table('tb_danhhieuthidua')->where('id',$id)->delete();
        Session::put('message','Xóa Danh hiệu thi đua thành công');
        return Redirect::to('/getshowalldanhhieuthidua');
    }
}
