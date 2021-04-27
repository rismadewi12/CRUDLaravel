<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;

use App\Mahasiswa;
use App\Student;
use App\Prodi;



class MahasiswaController extends Controller
{
    public function index(Request $request)
    {
        $mahasiswa= Student::all();
        if($request->has('cari')){
            $mahasiswa=Student::where('Nama','LIKE','%' .$request->cari. '%')->get();
        }
        else{
            $mahasiswa=Student::all();
        }
        return view('mahasiswa.index', ['mahasiswa' =>$mahasiswa]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prodi = Prodi::all();
       
        return view('mahasiswa.create',compact('prodi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nama'=> 'required',
            'Nim'=> 'required',
            'id_prodi'=> 'required',
            'Semester'=> 'required',
            'Status'=> 'required',
        ]);

        student::create([
            'Nama' => $request->Nama,
            'Nim' => $request->Nim,
            'id_prodi' => $request->id_prodi, 
            'Semester' => $request->Semester,
            'Status' => $request->Status,
        ]);
        return redirect('/mahasiswa')->with('status', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prodi = Prodi::all();
        $mahasiswa = Student::find($id);
        return view('mahasiswa.edit', compact('mahasiswa','prodi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mahasiswa = Student::find($id);
        $mahasiswa->update($request->all());
        return redirect('/mahasiswa')->with('status', 'Data Berhasil Diubah'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function delete($id)
    {
        $mahasiswa = Student::find($id);
        $mahasiswa->delete();
        return redirect('/mahasiswa')->with('status', 'Data Berhasil Dihapus');
    }

}
