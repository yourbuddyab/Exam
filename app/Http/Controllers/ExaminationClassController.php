<?php

namespace App\Http\Controllers;

use App\ExaminationClass;
use Illuminate\Http\Request;

class ExaminationClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = ExaminationClass::all();
        return view('/admin/classes/create', compact('classes'));
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
        $data = $request->validate([
            'classesname' => 'string | required',
        ]);
        ExaminationClass::create($data);
        return back()->with('message', 'CLass Creating Your Data!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ExaminationClass  $examinationClass
     * @return \Illuminate\Http\Response
     */
    public function show(ExaminationClass $examinationClass)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ExaminationClass  $examinationClass
     * @return \Illuminate\Http\Response
     */
    public function edit(ExaminationClass $examinationclass)
    {
        return view('admin.classes.edit', compact('examinationclass'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ExaminationClass  $examinationClass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExaminationClass $examinationclass)
    {
        $examinationclass->update($request->validate([
            'classesname' => 'string | required',
        ]));
        return redirect('/examinationclass');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ExaminationClass  $examinationClass
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExaminationClass $examinationclass)
    {
        $examination = ExaminationClass::where('id', $examinationclass->id)->first();
        $examination->totalstudent = 0;
        $examination->save();
        return back();
    }
}
