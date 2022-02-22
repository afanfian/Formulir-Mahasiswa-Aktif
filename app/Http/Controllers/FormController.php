<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

 
class FormController extends Controller
{
    public function input()
    {
        return view('main');
    }
 
    public function proses(Request $request)
    {
        Alert::success('Pesan Terkirim!', 'Selamat Data Anda Sudah Terkirim');
        $this->validate($request,[
           'nama' => 'required|min:5|max:20',
           'nrp' => 'required|numeric',
           'jeniskelamin' => 'required|max:1',
           'departemen' => 'required',
           'angkatan' => 'required|numeric',
           'ipk' => 'required|numeric',
           'ips' => 'required|numeric',
        ]);
        return view('hasil',['data' => $request]);
    }
    
}