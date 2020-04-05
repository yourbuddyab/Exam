{{-- @extends('layouts.app') --}}
@extends('layouts.sidebar')
@section('admin')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header text-center">Active Student</div>
                                <div class="card-body">
                                    Total Student : {{$totalStudent}}
                                </div>
                                <div class="card-header text-center">
                                    <a href="/student" class="btn btn-info">Add Student Info</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header text-center">Question</div>
                                <div class="card-body">
                                    Total Question : {{$totalquestion}}
                                  </div>
                                <div class="card-header text-center">
                                    <a href="/exam" class="btn btn-info">Question list</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header text-center">Question</div>
                                <div class="card-body">
                                    Total Question : {{$totalquestion}}
                                  </div>
                                <div class="card-header text-center">
                                    <a href="/exam" class="btn btn-info">Question list</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
