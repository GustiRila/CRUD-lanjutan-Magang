<?php

namespace App\Http\Controllers;

use App\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Classroom::all(); # SELECT * FROM classrooms;

        return view('pages.classroom.index')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.classroom.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_data = new Classroom;
        $new_data->name = $request->get('name');
        $new_data->room = $request->get('room');
        $new_data->save();

        return redirect()->route('classroom.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function show(Classroom $classroom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Classroom::findOrFail($id);
        // dd($data);
        return view('pages.classroom.edit')->with([
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $classroom = Classroom::findOrfail($id);
        $classroom->name = $request->get('name');
        $classroom->room = $request->get('room');
        $classroom->save();

        return redirect()->route('classroom.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function destroy($classroom)
    {
        $data = Classroom::findOrFail($classroom);
        $data->delete();

        return redirect()->route('classroom.index');
    }
}
