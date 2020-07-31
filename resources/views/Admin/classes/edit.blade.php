{{-- @extends('layouts.app') --}}
@extends('layouts.sidebar')

@section('admin')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Update Class Name</div>
                <div class="card-body">
                    <form action="{{route('examinationclass.update',$examinationclass->id )}}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                          <label for="class">Class</label>
                        <input type="text" name="classesname" id="class" value="{{$examinationclass->classesname}}" class="form-control" placeholder="Enter Class Name" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Total Student Belong to {{$examinationclass->totalstudent}}</small>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-primary w-25">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
