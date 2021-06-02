@extends('exam.layout.layout')
@section('section')
    {{-- <h4 class="bg-dark p-3 text-center text-white">EXAM</h4> --}}
    <div class="p-3 container-fluid">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">Your Rueslt</div>
                    <div class="card-body text-center">
                        <h1>Thankyou.</h1>
                        <h4> {{ session('name')->studentname }}</h4>
                        <a href="/" class="btn btn-info">Finish</a>
                        {{-- <p>Your score is : <span class="text-muted">{{$score}}</span></p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

