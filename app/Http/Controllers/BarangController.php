<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Barang;
use App\Models\Kategori;
use Barryvdh\DomPDF\Facade\PDF;
use App\Models\Log_barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(){
        $data = Log::with('kategoris')->latest()->get();
        $total = Log::with('kategoris','barangs')->where('ket','Masuk')->get();
        $Baik = Barang::where('kondisi', 'Baik')->get();
        $Rusak = Barang::where('kondisi', 'Rusak')->get();
        $Jenis = Barang::groupBy('jenis_barang')->selectRaw('jenis_barang, count(*) as total')->get();
        // dd($total);

    return view('index',[
        'data' => $data,
        'Baik' => $Baik,
        'Rusak' => $Rusak,
        'total' => $total,
        'Jenis' => $Jenis,

    ]);
    }
    public function detail(Log $log){
        $data = $log->load('kategoris', 'kategoris.barangs');
        $allkategoris = Kategori::all();

        return view('log_barang.detail',[
            'data' => $data,
            'allkategoris' => $allkategoris,
        ]);
    }

public function store(Request $request) {


    // Dynamic validation for 'kategori' array
    $kategoriValidation = [];
    foreach ($request->input('kategori') as $key => $value) {
        $kategoriValidation["kategori.{$key}"] = 'required';
    }

    // Overall request validation
    $validatedData = $this->validate($request, [
        'tanggal' => 'required',
        'deskripsi' => 'required',
        'ket' => 'required',
    ] + $kategoriValidation);

    // Create a Log entry
    $log = Log::create([
        'tanggal' => $validatedData['tanggal'],
        'ket' => $validatedData['ket'],
        'deskripsi' => $validatedData['deskripsi'],
    ]);

    // Create or retrieve Kategori entries for each item in the 'kategori' array
    foreach ($validatedData['kategori'] as $kategoriItem) {
        // Check if 'nama_kategori' already exists
        $kategori = Kategori::firstOrCreate(['nama_kategori' => $kategoriItem]);

        // Create a Log_barang entry linking the 'kategori' and 'log'
        Log_barang::create([
            'kategori_id' => $kategori->id,
            'log_id' => $log->id,
            'qty' => 0,
        ]);
    }

        // Additional logic or redirection as needed
        // ...

        return redirect()->route('home')->with('success',
            'Berhasil Menambah data!'
        );
}

public function delete( $id){
    $log = Log::findOrFail($id);
    $log->delete();

    return redirect()->route('home')->with('success', 'Berhasil Menghapus data!');
}

public function barangs(Request $request, $id) {
    $validate = $this->validate($request, [
        'kategori_id'=> 'required',
        'nama_barang'=> 'required',
        'jenis_barang'=> 'required',
        'kode_barang'=> 'required',
        'kondisi'=> 'required',
        'deskripsi'=> 'required',
    ]);


    Barang::create([
        'log_id'=> $id,
        'kategori_id'=> $validate['kategori_id'],
        'nama_barang'=> $validate['nama_barang'],
        'jenis_barang'=> $validate['jenis_barang'],
        'kode_barang'=> $validate['kode_barang'],
        'kondisi'=> $validate['kondisi'],
        'deskripsi'=> $validate['deskripsi'],

    ]);

    Log_barang::UpdateOrCreate([
        'kategori_id'=>$validate['kategori_id']],
        [
            'log_id'=>$id,
            'qty' =>1
    ]);

        return redirect()->route('detail',$id)->with(
            'success',
            'Berhasil Menambah data!'
        );

}
    public function delete_barang($id)
    {
        $log = Barang::findOrFail($id);
        $log->delete();

        return redirect()->route('detail', $log->log_id)->with('success', 'Berhasil Menghapus data!');
    }

    public function edit(Request $request, $id){

        $validate = $this->validate($request, [

            'nama_barang' => 'required',
            'jenis_barang' => 'required',
            'kode_barang' => 'required',
            'kondisi' => 'required',
            'deskripsi' => 'required',
        ]);
        $d = Barang::FindOrfail($id);

        $d->update($validate);
        return redirect()->route('detail', $d->log_id)->with('success', 'Berhasil Mengedit data!');
    }

public function barangrusak(){
    $data = Barang::where('kondisi','Rusak')->Filter(request('search'))->paginate(15);


    return view('Barang_rusak.index',[
        'data' => $data
    ]);
}
public function barangbaik(){
    $data = Barang::where('kondisi','Baik')->Filter(request('search'))->paginate(15);


    return view('Barang_baik.index',[
        'data' => $data
    ]);
}
public function cetakPDF_barangrusak()
{
        $data = Barang::where('kondisi', 'Rusak')->Filter(request('search'))->paginate(15);

    $pdf = PDF::loadView('Barang_rusak.cetakPDF', compact('data'));

    return $pdf->stream();
}
public function cetakPDF_barangbaik()
{
        $data = Barang::where('kondisi', 'Baik')->Filter(request('search'))->paginate(15);

    $pdf = PDF::loadView('Barang_baik.cetakPDF', compact('data'));

    return $pdf->stream();
}

}
