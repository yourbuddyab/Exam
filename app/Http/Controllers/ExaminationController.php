<?php

namespace App\Http\Controllers;

use App\student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ExaminationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/exam.mainpage');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/exam.start');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $student=student::where('studentname', $request->studentName)->where('bdate', $request->bdate)->get()->toarray();
        $id=student::where('studentname', $request->studentName)->where('bdate', $request->bdate)->first();
        if($id->date == date('d-m-Y')){
            if ($id->time ==  date('h:i:s')) {
                if(count($student)){
                    $key=$request->studentName;
                    return redirect('/notication/'.$id->id)->with('name', $key);
                }else{
                    return back()->with('error', 'The Student Name or Date of Birth you entered is incorrect!!');
                }
            }else {
                return back()->with('error', 'You have remaining time');
            }
        }else {
            return back()->with('error', "Not Schedule!!");
        }
    }

    public function notication()
    {
        return view('exam.notication');
    }

    public function startExam(Request $request)
    {
        if(isset($request->check)){
        $student = student::findorFail($request->check);
        Session::put('name', $student);
        return redirect('/exam/1');
        }
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
    public function update(Request $request)
    {
        // $data = student::findorFail($request->id);
        // dd($data);
        // // $data->Answer[$request->questionid] = $request->Answer;
        // // dd($data->Answer[$request->questionid] = $request->Answer);
        // $data->save();
        // $newid = intval($id)+1;
        // $check = exam::where('id',$newid)->get()->toArray();        
        // if ($check) {
        //     return redirect('/exam/'.$newid);
        // } else {
        //     return redirect('/exam/'.$id);
        // }
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
}
