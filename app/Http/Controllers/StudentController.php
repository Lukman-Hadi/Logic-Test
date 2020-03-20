<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\School;
use DataTables;
use Illuminate\Support\Facades\Cache;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = School::all();
    	return view('database',compact('schools'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $schools = School::all();
        $student = new Student;
        $student->nama = $request->name;
        $student->alamat = $request->alamat;
        $student->telp = $request->telp;
        $student->id_sekolah = $request->id_sekolah;
        $student->save();
        return view('database',compact('schools'));
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
        //
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
        //
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
    
    public function GetStudent()
    {
        $data = Student::join('schools','students.id_sekolah','=','schools.id')->select(['students.nama','students.alamat','students.telp','schools.nama_sekolah']);
        return Datatables::of($data)->make(true);
    }
}
