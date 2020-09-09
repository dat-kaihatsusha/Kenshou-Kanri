<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Employees;
use App\Danhhieuthidua;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class EmployeesController extends Controller
{
    public function GetForm()
    {
        return view('employees.employees');
    }

    public function Save(Request $request)
    {
        $data = $request->all();
        $employees = new Employees();
        $employees->manhanvien = $data['manhanvien'];
        $employees->hoten = $data['hoten'];
        $employees->chucvu = $data['chucvu'];
        $employees->namsinh = $data['namsinh'];
        $employees->id_phongban = $data['id_phongban'];
        $employees->id_loaikhenthuong = $data['id_loaikhenthuong'];
        $employees->save();

        session::put('mesage', 'Thêm Employee thành công!');
        return redirect::to('/getformemployees');
    }

    public function getshowallemployees(){
        $showallemployees = Employees::orderBy('id','ASC')->get();
        return view('employees.getshowallemployees')->with('showallemployees',$showallemployees);
    }

    public function getformeditemployees($idemployees)
    {
        $editemployees = Employees::find($idemployees);
        return view('employees.editemployees')->with('editemployees',$editemployees);
    }

    public function updateemployees(Request $request, $idemployees)
    {
        $data = $request->all();
        $update = Employees::find($idemployees);
        $update->manhanvien = $data['manhanvien'];
        $update->hoten = $data['hoten'];
        $update->chucvu = $data['chucvu'];
        $update->namsinh = $data['namsinh'];
        $update->id_phongban = $data['id_phongban'];
        $update->id_loaikhenthuong = $data['id_loaikhenthuong'];
        $update->save();

        session::put('message', 'Update Employees mới thành công!');
        return Redirect::to('/getshowallemployees');
    }

    public function getdeleteemployees($id)
    {
        DB::table('tb_employees')->where('id',$id)->delete();
        Session::put('message','Xóa employees thành công');
        return Redirect::to('/getshowallemployees');
    }

    public function timkiememployees(Request $request){
        $data = $request->all();
        // $employees = Employees::find($data['hoten']);
        $id_employees = DB::table('tb_employees')->where('hoten', $data['hoten'])->value('id');

        // $danhhiethiduacuanhanvien = DB::table('tb_danhhieuthidua')->join('tb_employees', 'tb_danhhieuthidua.id_nhanvien','=','tb_employees.id')->where('tb_danhhieuthidua.id_nhanvien', $id_employees)->get();
        // return view('employees.getshowallemployees')->with('danhhiethiduacuanhanvien',$danhhiethiduacuanhanvien);

        $getdanhhiethiduacuanhanvien = [
            DB::table('tb_danhhieuthidua')->join('tb_employees', 'tb_danhhieuthidua.id_nhanvien','=','tb_employees.id')->where('tb_danhhieuthidua.id_nhanvien', $id_employees)->value('tendanhhieu'),
            DB::table('tb_danhhieuthidua')->join('tb_employees', 'tb_danhhieuthidua.id_nhanvien','=','tb_employees.id')->where('tb_danhhieuthidua.id_nhanvien', $id_employees)->value('namdatdanhhieu'),
            DB::table('tb_danhhieuthidua')->join('tb_employees', 'tb_danhhieuthidua.id_nhanvien','=','tb_employees.id')->where('tb_danhhieuthidua.id_nhanvien', $id_employees)->value('masoquyetdinh'),
            DB::table('tb_danhhieuthidua')->join('tb_employees', 'tb_danhhieuthidua.id_nhanvien','=','tb_employees.id')->where('tb_danhhieuthidua.id_nhanvien', $id_employees)->value('noicap'),
            DB::table('tb_danhhieuthidua')->join('tb_employees', 'tb_danhhieuthidua.id_nhanvien','=','tb_employees.id')->where('tb_danhhieuthidua.id_nhanvien', $id_employees)->value('id_nhanvien'),
            DB::table('tb_danhhieuthidua')->join('tb_employees', 'tb_danhhieuthidua.id_nhanvien','=','tb_employees.id')->where('tb_danhhieuthidua.id_nhanvien', $id_employees)->value('ghichu')
        ];

        $showallemployees = Employees::orderBy('id','ASC')->get();

        return view('employees.getshowallemployees')->with('getdanhhiethiduacuanhanvien',$getdanhhiethiduacuanhanvien)->with('showallemployees',$showallemployees);

    }
}
