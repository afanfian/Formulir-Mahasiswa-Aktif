<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class FormController extends Controller
{
    public function input()
    {
        return view('main');
    }
 
    public function proses(Request $request)
    {
        $this->validate($request,[
           'nama' => 'required|min:5|max:20',
           'nrp' => 'required|numeric',
           'jeniskelamin' => 'required|',
           'departemen' => 'required',
           'angkatan' => 'required|numeric',
           'ipk' => 'required|numeric',
           'ips' => 'required|numeric'
        ]);
        return view('hasil',['data' => $request]);
    }
}