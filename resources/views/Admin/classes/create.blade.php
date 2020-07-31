{{-- @extends('layouts.app') --}}
@extends('layouts.sidebar')

@section('admin')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Class Add For Examination</div>
                <div class="card-body">
                    <form action="{{route('examinationclass.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                          <label for="class">Class</label>
                          <input type="text" name="classesname" id="class" class="form-control" placeholder="Enter Class Name" aria-describedby="helpId">
                          <small id="helpId" class="text-muted"></small>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-primary w-25">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-header">Classes</div>
                <div class="card-body">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <td>S.no</td>
                                <td>Class Name</td>
                                <td>Total Student</td>
                                <td>Edit</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($classes as $key => $item)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$item->classesname}}</td>
                                <td>{{$item->totalstudent}}</td>
                                <td class="row">
                                    <div class="col-md-6 right-center">
                                        <a href="{{route('examinationclass.edit', $item->id)}}" class="btn btn-primary px-5">Edit</a>
                                    </div>
                                    <form action="{{route('examinationclass.destroy', $item->id)}}" method="post" class="col-md-6 left-center">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger px-5">Reset</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
