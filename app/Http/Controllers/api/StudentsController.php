<?php

namespace App\Http\Controllers\api;

use App\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Student::All();
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

        $student = Student::create($request->all());

        return response()->json([
            'status'       => 'success',
            'message'      => 'The request has been fulfilled',
            'data'         => $student
        ], Response::HTTP_CREATED);


        // return Student::create($request->all);



        // $request->validate([
        //     'nama' => 'required',
        //     'nrp' => 'required|size:9',
        //     'email' => 'required',
        //     'jurusan' => 'required'
        // ]);
        
        // $student = new Student;
        // $student->nama = $request->nama;
        // $student->nrp = $request->nrp;
        // $student->email = $request->email;
        // $student->jurusan = $request->jurusan;
        

        // $student->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return Student::find($id);
        $student = Student::find($id);
        return response()->json([
            'status'    => 'success',
            'message'   => 'Data product by Id',
            'data'      => $student
        ], Response::HTTP_OK);
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
    public function update(Request $request, Student $id)
    {
        $id->update($request->all());
        return response()->json([
            'status'        => 'success',
            'message'       => 'Data Updated Successfully',
            'data'          => $id
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $id)
    {
        $id->delete();
        return response()->json([
            'status'        => 'success',
            'message'       => 'Data Deleted Succesfully',
            'data'          => $id
        ], Response::HTTP_NO_CONTENT);
    }
}
