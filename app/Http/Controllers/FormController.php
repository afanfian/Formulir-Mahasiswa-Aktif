<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

 
class FormController extends Controller
{
    public function formulir()
    {
        return view('main');
    }
 
    public function hasil(Request $request)
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
           'ktm' => 'required|mimes:jpg,png,jpeg|max:2048',
        ]);
        $foto_link = $this->saveFoto( $request, 1 );
        $request->ktm = $foto_link;
        return view('hasil',['data' => $request]);
    }
    public function create()
    {
        return view('main');
    }

    public function saveFoto(Request $request, $id)
    {
        $foto = $request->ktm; // typedata : file
        $foto_name = ''; // typedata : string
        if ($foto !== NULL) {
            $foto_name = 'foto' . '-' . $id . "." . $foto->extension(); // typedata : string
            $foto_name = str_replace(' ', '-', strtolower($foto_name)); // typedata : string
            $foto->storeAs(null, $foto_name, ['disk' => 'public']); // memanggil function untuk menaruh file di storage
        }
        return asset('storage') . '/' . $foto_name; // me return path/to/file.ext
    }
}