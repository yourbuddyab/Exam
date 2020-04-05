@extends('exam.layout.layout')
    @section('section')
        <div class="p-3 container-fluid">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-dark">
                            Login For Student
                        </div>
                        <div class="card-body p-5">                                                    
                            <b>COMMON TEST RULES & INSTRUCTIONS</b>
                            <ol>
                                <li>All school rules must be observed throughout the entire test.</li>
                                <li>Normal lessons will resume after the Common Test.</li> 
                                <li>Students are required to bring their own writing and mathematical instruments.  No borrowing, lending or exchange of any materials is allowed during the Common Test.</li>
                                <li>Absentees must produce original medical certificates from approved clinics or hospitals.  No parents’ letter will be accepted.  Students who are absent without valid reasons will be given a “0” for the paper.</li>
                                <li>A student will be given “0” if he or she is caught cheating in the Common Test.</li>
                                <li>No mobile phones or electronic gadgets that can store, transmit, receive data or information are allowed.</li>
                                <li>Students must not talk, whisper, do hand signal or any other form of verbal or non-verbal communication during the Common Test.  Such actions will be considered as having the intention to cheat.</li>
                                <li>Students must be seated at their assigned desks by 7.25am.</li>
                                <li>Students who are late will not be given extra time.</li>
                                <li>Only essential writing materials are allowed on the student’s desk.  All bags, books and any unauthorised materials should be left at the front of the classroom.</li>
                                <li>Students are to follow any instructions given by the invigilators and instructions stated on the question paper. Failure to follow instructions stated on the question paper or given by the invigilators may lead to students being penalised.</li>
                                <b>DURING THE COMMON TEST </b>
                                <li>Students are advised that good time management is essential.  They should not spend too much time on few questions and leave no time for others.</li>
                                <li>Students are advised to read the questions carefully. No marks are awarded for information not asked for in the questions.</li>
                                <li>Students should write their answers legibly in black or blue ink.  Pens or pencils of other colours may be used for maps and diagrams only.</li>
                            </ol>
                            <b>Internal Exam Committee</b>                                                                                                       
                            <form action="/notication" method="post">
                                @csrf
                                <div class="form-group pt-3">
                                    <label for="">
                                    <input type="checkbox" name="check" value="{{explode('/',$_SERVER['REQUEST_URI'])[2]}}"  required id="">
                                        I do confirm that the above details belong to me & are correct to the best of my knowledge. All electronic correspondence
                                        will be done only through primary email id and mobile no.
                                    </label>
                                </div>
                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-dark">Start Exam</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
    
     
     
     
     
     
     
    