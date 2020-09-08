<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Trinhcap;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class TrinhcapController extends Controller
{
    public function GetFrom(){
        return view('trinhcap.trinhcap');
    }

    public function Save(Request $request){
        $data = $request->all();
        $trinhcap = new Trinhcap();
        $trinhcap->tentrinhcap = $data['tentrinhcap'];
        $trinhcap->save();

        Session::put('message', 'Thêm trình cấp thành công');
        return redirect('/getformtrinhcap');
    }

    public function getshowalltrinhcap()
    {
        $showalltrinhcap = Trinhcap::orderBy('id','ASC')->get();
        return view('trinhcap.showalltrinhcap')->with('showalltrinhcap',$showalltrinhcap);
    }

    public function getformedittrinhcap($idtrinhcap)
    {
        $edittrinhcap = Trinhcap::find($idtrinhcap);
        return view('trinhcap.getformedittrinhcap')->with('edittrinhcap',$edittrinhcap);
    }

    public function updatetrinhcap(Request $request, $idtrinhcap)
    {
        $data = $request->all();
        $update = Trinhcap::find($idtrinhcap);
        $update->tentrinhcap = $data['tentrinhcap'];
        $update->Save();

        session::put('message', 'Update thành công trình cấp!');
        return redirect::to('/getshowalltrinhcap');
    }

    public function getdeletetrinhcap($idtrinhcap){
        DB::table('tb_trinhcap')->where('id',$idtrinhcap)->delete();
        Session::put('message','Xóa trình cấp thành công');
        return Redirect::to('/getshowalltrinhcap');
    }

}
