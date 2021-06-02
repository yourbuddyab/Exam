<?php

namespace App\Http\Controllers;

use App\exam;
use App\Answer;
use App\student;
use App\students;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $question= exam::all();
        return view('/exam.question.show', compact('question'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('exam.question.addexam');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$exam = exam::create($this->validateRequest());
		return redirect('/exam/create')->with('status', 'Your Question Is Upload');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $exam
     * @return \Illuminate\Http\Response
     */
    public function show(exam $exam)
    { 
        $student  = student::where('id', Session('name')->id)->first()->status;
        if($student == 1){
            $all = exam::all();
            return view('exam.exam', compact('exam','all'));
        }else {
            return redirect('/');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(exam $exam)
    {
        return view('/exam.question.update', compact('exam'));
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
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(exam $exam)
    {
        $exam->delete();
        return back()->with('status', 'Delete Question');
    }

    private function validateRequest()
	{
		return request()->validate([
			'que' => ['required','string','min:5'],
			'opt1' => ['required','string'],
			'opt2' => ['required','string'],
			'opt3' => ['required','string'],
			'opt4' => ['required','string'],
            'ans' => ['required','string'],
            'confans' => [''],
		]);
    }
    
    public function scorecard(){
        $student=student::where('id', request()->student_id)->first();
        if ($student->status == '1') {
            $all = exam::all(); 
            $answer = Answer::where('student_id', request()->student_id)->get();
            $score = 0;
            foreach ($all as $key => $value) {
                foreach ($answer as $key) {
                    if($value->id === $key->exams_id){
                        if($value->ans === $key->answer)
                        {
                            $score++;
                        }
                    }
                }            
            }
            $student->update([
                'Answer' => $score,
                'status' => '2'
            ]);
            return view('exam.finish',compact('score'));
        }else {
            return redirect('/');
        }
    }

    // public function sessioname(Request $request)
    // {

    //     $key=$request->name;
    //     session()->put('name',$key);
    //     return redirect('/exam/1');
    // }

    public function addstudent()
    {
        $exam = student::create($this->validateRequeststudent());
		 return redirect('/exam/1');
    }

    private function validateRequeststudent()
	{
        return request()->validate([
			'name' => ['required','string','min:5'],
			'ans' => [''],
		]);
    }
}           