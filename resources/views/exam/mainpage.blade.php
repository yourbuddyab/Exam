@extends('exam.layout.layout')
    @section('section')
        <div class="p-3 container-fluid">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card my-5">
                        <div class="card-body text-center mt-1">
                            <h4>Are You Ready For Exam then Click below Button for Start Exam</h4>
                            <a href="/create" class="btn btn-success w-50 p-3"> <label class="h3 mt-1">Start Exam</label> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection