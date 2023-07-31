<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use App\Models\Kecamatan;
use App\Models\Desa;
use App\Models\Kelas;
use App\Models\Kategori;
use App\Models\Daftar;
use App\Models\User;
use Session;

class PetaniController extends Controller
{


    public function index(){
        if(Session::get('status')!='login'){
           return redirect('logout');
        }
        $kecamatan=DB::table('kecamatan')->count();
        $desa=DB::table('desa')->count();
        $petani=DB::table('petani')->count();
        $kategori=DB::table('kategori')->count();
        $luas=DB::table('petani')->select(DB::raw('SUM(luas) AS luas'))->get();
        foreach($luas as $val){
        $jumlahluas=$val->luas;
        }

        return view('dashboard',['kecamatan'=>$kecamatan,'desa'=>$desa, 'petani'=>$petani, 'kategori'=>$kategori,'luas'=>$jumlahluas]);
    }
 
    public function daftar(){
        if(Session::get('status')!='login'){
           return redirect('logout');
        }
        $petani = DB::table('petani')
            ->join('kategori', 'petani.tumbuhan', '=', 'kategori.id')
            ->join('kelas', 'petani.kelas', '=', 'kelas.id')
            ->join('desa', 'petani.desa', '=', 'desa.id')
            ->join('kecamatan', 'petani.kecamatan', '=', 'kecamatan.id')
            ->select('petani.*','kategori.kategori','kelas.kelas','desa.desa','kecamatan.kecamatan')
            ->get();
            
            $kecamatan = DB::table('kecamatan')->get();
            if(Session::get('level')=='admin'){
                $desa = DB::table('desa')->get();
            }else{
                $email=Session::get('name');
                $desa = DB::select("SELECT * FROM desa WHERE email='$email'");
            }
            $kategori = DB::table('kategori')->get();
            $kelas = DB::table('kelas')->get();
        return view('petani.daftar',['petani' => $petani,'kecamatan' => $kecamatan,'desa' => $desa,'kelas' => $kelas,'kategori' => $kategori]);
       
    }

    public function detail($id){
        if(Session::get('status')!='login'){
           return redirect('logout');
        }
        $petani = DB::table('petani')
            ->join('kategori', 'petani.tumbuhan', '=', 'kategori.id')
            ->join('kelas', 'petani.kelas', '=', 'kelas.id')
            ->join('desa', 'petani.desa', '=', 'desa.id')
            ->join('kecamatan', 'petani.kecamatan', '=', 'kecamatan.id')
            ->select('petani.*','kategori.kategori','kelas.kelas','desa.desa','kecamatan.kecamatan')
            ->where('petani.id',$id)
            ->get();
            

        return view('petani.detail',['petani' => $petani]);
       
    }
    public function simpandaftar(Request $request)
    {
         if(Session::get('status')!='login'){
           return redirect('logout');
        }
        $email=Session::get('name');
        Daftar::create([
            'nama' => $request->nama,
            'hp' => $request->hp,
            'kecamatan' => $request->kecamatan,
            'desa' => $request->desa,
            'nmtumbuhan' => $request->nmtumbuhan,
            'kelas' => $request->kelas,
            'luas' => $request->luas,
            'tumbuhan' => $request->kategori,
            'waktu_panen' => $request->waktu_panen,
            'jumlah_bibit' => $request->jumlah_bibit,
            'koordinat' => $request->koordinat,
            'tanggal'=>$request->tanggal,
            'user'=>$email
        ]); 

        return redirect('daftar');
    }
    public function updatedaftar(Request $request){
         if(Session::get('status')!='login'){
           return redirect('logout');
        }
        $post = Daftar::find($request->id);
        $post->nama = $request->nama;
        $post->hp = $request->hp;
        $post->kecamatan = $request->kecamatan;
        $post->desa = $request->desa;
        $post->nmtumbuhan = $request->nmtumbuhan;
        $post->kelas = $request->kelas;
        $post->luas = $request->luas;
        $post->tumbuhan = $request->kategori;
        $post->waktu_panen = $request->waktu_panen;
        $post->jumlah_bibit = $request->jumlah_bibit;
        $post->koordinat = $request->koordinat;
        $post->tanggal = $request->tanggal;
        $post->save();
       return redirect('daftar');
    }
    public function hapusdaftar($id){
         if(Session::get('status')!='login'){
           return redirect('logout');
        }
        $deleted = DB::table('petani')->where('id', $id)->delete();
        return redirect('daftar');
    }
    public function kecamatan(){
         if(Session::get('status')!='login'){
           return redirect('logout');
        }
         $kecamatan = DB::table('kecamatan')->get();
        return view('petani.kecamatan',['kecamatan' => $kecamatan]);
    }
    public function simpankecamatan(Request $request)
    {
         if(Session::get('status')!='login'){
           return redirect('logout');
        }
        Kecamatan::create([
            'kecamatan' => $request->kecamatan,
        ]); 

        return redirect('kecamatan');
    }
    public function updatekecamatan(Request $request){
         if(Session::get('status')!='login'){
           return redirect('logout');
        }
        $post           = Kecamatan::find($request->id);
        $post->kecamatan= $request->kecamatan;
        $post->save();

        return redirect('kecamatan');
    }
    public function hapuskecamatan($id){
         if(Session::get('status')!='login'){
           return redirect('logout');
        }
        $deleted = DB::table('kecamatan')->where('id', $id)->delete();
        return redirect('kecamatan');
    }
    public function desa(){
         if(Session::get('status')!='login'){
           return redirect('logout');
        }
        $desa = DB::select('SELECT desa.id as id, desa.desa as desa, desa.email as email, users.id as user FROM desa INNER jOIN users ON desa.email=users.email');
         //$desa = DB::table('desa')->get();
        return view('petani.desa',['desa' => $desa]);
    }
    public function simpandesa(Request $request)
    {
         if(Session::get('status')!='login'){
           return redirect('logout');
        }
 
        Desa::create([
            'desa' => $request->desa,
            'email' => $request->email,
        ]); 
        User::create([
            'nama' => $request->desa,
            'email' => $request->email,
            'password' => md5($request->password),
            'level' => 'desa'
        ]); 

        return redirect('desa');
    }
    public function hapusdesa($id){
         if(Session::get('status')!='login'){
           return redirect('logout');
        }
        
        $qy= DB::select("SELECT * FROM desa WHERE id='$id'");
        foreach($qy as $row){
            $email=$row->email;
        }
        $deleted = DB::table('desa')->where('id', $id)->delete();
        $deleteuser = DB::table('users')->where('email', $email)->delete();
        return redirect('desa');
    }
    public function updatedesa(Request $request){
         if(Session::get('status')!='login'){
           return redirect('logout');
        }
        $post    = Desa::find($request->id);
        $post->desa= $request->desa;
        $post->email= $request->email;
        $post->save();

        if($request->password != ''){
            $post          = User::find($request->user);
            $post->nama= $request->desa;
            $post->email= $request->email;
            $post->password= md5($request->password);
            $post->save();
        }else if($request->password==''){
            $post          = User::find($request->user);
            $post->nama= $request->desa;
            $post->email= $request->email;
            $post->save();
        }
        return redirect('desa');
    }
    public function kelas(){
         if(Session::get('status')!='login'){
           return redirect('logout');
        }
         $kelas = DB::table('kelas')->get();
        return view('petani.kelas',['kelas' => $kelas]);
    }
    public function simpankelas(Request $request)
    {
         if(Session::get('status')!='login'){
           return redirect('logout');
        }
        Kelas::create([
            'kelas' => $request->kelas,
        ]); 

        return redirect('kelas');
    }
    public function updatekelas(Request $request){
         if(Session::get('status')!='login'){
           return redirect('logout');
        }
        $post           = Kelas::find($request->id);
        $post->kelas= $request->kelas;
        $post->save();

        return redirect('kelas');
    }
    public function hapuskelas($id){
         if(Session::get('status')!='login'){
           return redirect('logout');
        }
        $deleted = DB::table('kelas')->where('id', $id)->delete();
        return redirect('kelas');
    }
    public function kategori(){
         if(Session::get('status')!='login'){
           return redirect('logout');
        }
        $kategori = DB::table('kategori')->get();
        return view('petani.kategori',['kategori' => $kategori]);
    }
    public function simpankategori(Request $request)
    {
         if(Session::get('status')!='login'){
           return redirect('logout');
        }
        Kategori::create([
            'kategori' => $request->kategori,
        ]); 

        return redirect('kategori');
    }
    public function updatekategori(Request $request){
         if(Session::get('status')!='login'){
           return redirect('logout');
        }
        $post           = Kategori::find($request->id);
        $post->kategori= $request->kategori;
        $post->save();

        return redirect('kategori');
    }
    public function hapuskategori($id){
         if(Session::get('status')!='login'){
           return redirect('logout');
        }
        $deleted = DB::table('kategori')->where('id', $id)->delete();
        return redirect('kategori');
    }
    public function grafik(){
         if(Session::get('status')!='login'){
           return redirect('logout');
        }
        $petani = DB::table('petani')
            ->join('kategori', 'petani.tumbuhan', '=', 'kategori.id')
            ->join('kelas', 'petani.kelas', '=', 'kelas.id')
            ->join('desa', 'petani.desa', '=', 'desa.id')
            ->join('kecamatan', 'petani.kecamatan', '=', 'kecamatan.id')
            ->select('petani.*','kategori.kategori','kelas.kelas','desa.desa','kecamatan.kecamatan')
            ->get();
        $kecamatan = DB::select('SELECT kecamatan.kecamatan,COUNT(petani.desa) AS desa, COUNT(petani.desa) AS jumlah FROM petani INNER JOIN kecamatan ON petani.kecamatan=kecamatan.id GROUP BY petani.kecamatan');
       $desa = DB::select('SELECT desa.desa,SUM(petani.luas) AS luas FROM petani INNER JOIN desa ON petani.desa=desa.id GROUP BY petani.desa');
       $kategori = DB::select('SELECT kategori.kategori,COUNT(petani.tumbuhan) AS jumlah FROM petani INNER JOIN kategori ON petani.tumbuhan=kategori.id GROUP BY petani.tumbuhan');
       $kelas = DB::select('SELECT kelas.kelas,COUNT(petani.kelas) AS jumlah FROM petani INNER JOIN kelas ON petani.kelas=kelas.id GROUP BY petani.kelas');

         return view('grafik',['kecamatan' => $kecamatan,'desa' => $desa,'kelas' => $kelas,'kategori' => $kategori]);
       
    }

    public function mapping(){
        if(Session::get('status')!='login'){
           return redirect('logout');
        }
        $peta=DB::table('petani')
            ->join('kategori', 'petani.tumbuhan', '=', 'kategori.id')
            ->join('kelas', 'petani.kelas', '=', 'kelas.id')
            ->join('desa', 'petani.desa', '=', 'desa.id')
            ->join('kecamatan', 'petani.kecamatan', '=', 'kecamatan.id')
            ->select('petani.*','kategori.kategori','kelas.kelas','desa.desa','kecamatan.kecamatan')
            ->get();
        return view('mapping',['peta'=>$peta]);
    }

    public function profil(){
        if(Session::get('status')!='login'){
           return redirect('logout');
        }
        $email=Session::get('name');
        $profil=DB::table('users')
                    ->where('email',$email)
                    ->get();
        return view('profil',['profil'=>$profil]);
    }

    public function updateprofil(Request $request){
         if(Session::get('status')!='login'){
           return redirect('logout');
        }
        if($request->password != ''){
            $post          = User::find($request->id);
            $post->nama= $request->nama;
            $post->email= $request->email;
            $post->password= md5($request->password);
            $post->save();
        }else if($request->password==''){
            $post          = User::find($request->id);
            $post->nama= $request->nama;
            $post->email= $request->email;
            $post->save();
        }
        if($request->email!=Session::get('name')){
            return redirect('logout');
        }else{
            return redirect('profil');
        }
    }

    public function updateprofil2(Request $request){
        if(Session::get('status')!='login'){
          return redirect('logout');
       }
       if($request->password != ''){
           $post          = User::find($request->id);
           $post->password= md5($request->password);
           $post->save();
       }
       return redirect('logout');
   }

    public function pengunjung(){
        
        $kecamatan = DB::select('SELECT kecamatan.kecamatan,COUNT(petani.desa) AS desa, COUNT(petani.desa) AS jumlah FROM petani INNER JOIN kecamatan ON petani.kecamatan=kecamatan.id GROUP BY petani.kecamatan');
       $desa = DB::select('SELECT desa.desa,SUM(petani.luas) AS luas FROM petani INNER JOIN desa ON petani.desa=desa.id GROUP BY petani.desa');
       $kategori = DB::select('SELECT kategori.kategori,COUNT(petani.tumbuhan) AS jumlah FROM petani INNER JOIN kategori ON petani.tumbuhan=kategori.id GROUP BY petani.tumbuhan');
       $kelas = DB::select('SELECT kelas.kelas,COUNT(petani.kelas) AS jumlah FROM petani INNER JOIN kelas ON petani.kelas=kelas.id GROUP BY petani.kelas');
        $peta=DB::table('petani')
            ->join('kategori', 'petani.tumbuhan', '=', 'kategori.id')
            ->join('kelas', 'petani.kelas', '=', 'kelas.id')
            ->join('desa', 'petani.desa', '=', 'desa.id')
            ->join('kecamatan', 'petani.kecamatan', '=', 'kecamatan.id')
            ->select('petani.*','kategori.kategori','kelas.kelas','desa.desa','kecamatan.kecamatan')
            ->get();
        return view('pengunjung',['kecamatan' => $kecamatan,'desa' => $desa,'kelas' => $kelas,'kategori' => $kategori,'peta'=>$peta]);
       
    }
}