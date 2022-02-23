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
    public function create()
    {
        return view('main');
    }

    public function store(Request $request)
    {
        $post = Post::create([
            'caption' => $request->caption,
            'id_user' => Auth::guard('web')->user()->id
        ]);
        $post->update([
            'foto' => $this->saveFoto($request, $post->id)
        ]);

        return redirect()->route('post.view', ['id' => $post->id]);
    }

    public function saveFoto(Request $request, $id)
    {
        $foto = $request->foto; // typedata : file
        $foto_name = ''; // typedata : string
        if ($foto !== NULL) {
            $foto_name = 'foto' . '-' . $id . "." . $foto->extension(); // typedata : string
            $foto_name = str_replace(' ', '-', strtolower($foto_name)); // typedata : string
            $foto->storeAs(null, $foto_name, ['disk' => 'public']); // memanggil function untuk menaruh file di storage
        }
        return asset('storage') . '/' . $foto_name; // me return path/to/file.ext
    }
}