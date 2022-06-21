<?php
 
namespace App\Http\Controllers\Dashboard;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
 
use App\Models\Pesan;
 
class PesanController extends Controller
{
    public function index(){
        $title = 'My Pesan';
 
        if(\Auth::user()->role == 1){
            $data = Pesan::orderBy('created_at','desc')->get();
        }else{
            $data = Pesan::where('users',\Auth::user()->id)->orderBy('created_at','desc')->get();
        }
 
        return view('dashboard.pesan.index',compact('title','data'));
    }
 
    public function detail($id){
        $dt = Pesan::where('id',$id)->first();
        $title = 'Detail Pesan';
 
        if(\Auth::user()->role == 1){
            Pesan::where('id',$id)->update([
                'status'=>1
            ]);
        }
 
        return view('dashboard.pesan.detail',compact('title','dt'));
    }
 
    public function add(){
        $title = 'Menambah pesan';
 
        return view('dashboard.pesan.add',compact('title'));
    }
 
    public function store(Request $request){
        $this->validate($request,[
            'judul'=>'required',
            'keterangan'=>'required'
        ]);
 
        $data['judul'] = $request->judul;
        $data['keterangan'] = $request->keterangan;
        $data['users'] = \Auth::user()->id;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
 
        Pesan::insert($data);
 
        \Session::flash('sukses','Pesan berhasil dikirim');
        return redirect('pesan/add');
    }
}