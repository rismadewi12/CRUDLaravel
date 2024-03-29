<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
       $students = Student::all();
        return view('students.index',compact ('students'));
    }

    
    //  * Show the form for creating a new resource.
    //  
    //  * @return \Illuminate\Http\Response
    //  */
    public function create()
    {
        return view('students.create');
    }

    
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
     
    public function store(Request $request)
    {
        $validated = $request->validate
        ([
            'Nama'=> 'required',
            'Nim'=> 'required',
            'id_prodi'=> 'required',
            'Semester'=> 'required',
            'Status'=> 'required',
        ]);
        
        // $student = new student;
        // $student->Nama   = $request->Nama;
        //$student->Nim    = $request->Nim; 
        //$student->kelas  = $request->kelas;
        //$student->Skor   = $request->Skor;

        // $student->save();

       // Student::create([
       // 'Nama' => $request->Nama,
       // 'Nim' => $request->Nim,
       // 'Kelas' => $request->Kelas,
       // 'Skor' => $request->Skor
       // ]);

       student:: create($request->all());
        return redirect('/students')->with('status','Data Berhasil diInput!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    /*public function show(Student $student)
    {
        return view ('students.show', compact ('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
   /* public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $validated = $request->validate
        ([
            'Nama'=> 'required',
            'Nim'=> 'required',
            'id_prodi'=> 'required',
            'Semester'=> 'required',
            'Status'=> 'required',
        ]);
        
       Student::where('id', $student->id)
             ->update([
                'Nama' => $request->Nama,
                'Nim' => $request->Nim,
                'id_prodi' => $request->id_prodi, 
                'Semester' => $request->Semester,
                'Status' => $request->Status,
        ]);
        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {   
        Student::destroy($student->id);
        return redirect('/students')->with('status', 'Data  Berhasil DiDelete!');
    }
}
