<?php
 
namespace App\Http\Controllers\Dashboard;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
 
use App\Models\Profile_kampus;
 
class ProfileKampusController extends Controller
{
    public function index(){
        $title = 'Update Profile Kampus';
        $dt = Profile_kampus::first();
 
        return view('dashboard.profile_kampus.index',compact('title','dt'));
    }
 
    public function update(Request $request){
        $this->validate($request,[
            'nama'=>'required',
            'alamat'=>'required',
            'no_telp'=>'required'
        ]);
 
        $dt = Profile_kampus::first();
        $dt->nama = $request->nama;
        $dt->no_telp = $request->no_telp;
        $dt->alamat = $request->alamat;
        $dt->created_at = date('Y-m-d H:i:s');
        $dt->updated_at = date('Y-m-d H:i:s');
 
        $file = $request->file('photo');
        if($file){
            $nama_gambar = $file->getClientOriginalName();
            $file->move('kampus_images',$nama_gambar);
 
            $dt->photo = 'kampus_images/'.$nama_gambar;
        }
 
        $dt->save();
 
        \Session::flash('sukses','Data berhasil di update');
 
        return redirect()->back();
    }
}