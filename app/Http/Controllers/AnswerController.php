<?php

namespace App\Http\Controllers;

use App\exam;
use App\Answer;
use App\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = student::orderBy('Answer', 'desc')->get();
        return view('/exam.result', compact('result'));
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
        $panswer = Answer::where('student_id', $request->student_id)->where('exams_id' , $request->exams_id)->first();
        // dd($panswer->id);
        if($panswer != null){
            $newanswer = Answer::findorFail($panswer->id);
            $newanswer->answer = $request->answer;
            $newanswer->save();
        }else{
        $ans = Answer::create($this->validateRequest());
        }
        $newid = intval($request->exams_id)+1;
        $check = exam::where('id',$newid)->get()->toArray();        
        if ($check) {
            return redirect('/exam/'.$newid);
        } else {
            // Session::put('answer', $answer);
            return redirect('/exam/'.$request->exams_id);
        }
    }
    public function examCheck(Request $request)
    {
        $answer = Answer::where('student_id', $request->student_id)->where('exams_id' , $request->exams_id)->first();
        return $answer->answer;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show(Answer $answer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function edit(Answer $answer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Answer $answer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answer $answer)
    {
        //
    }

    private function validateRequest()
    {
        return request()->validate([
            'student_id'  => 'required|string',
            'exams_id' => 'required|string',
            'answer' => 'required|string',
        ]);
    }
}
