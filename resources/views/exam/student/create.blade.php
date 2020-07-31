{{-- @extends('exam.layout.layout') --}}
@extends('/layouts.sidebar')
  @section('admin')
    <div class="container" style="margin-top: .04rem!important;">     
      <div class="row">
        <div class="col-md-12 mx-auto">
          <div class="card">
            <div class="card-header">Add Student</div>
            <div class="card-body">
              <form action="/student" method="post">
                @csrf 
                <div class="form-group">
                  <label for="studentname">Student Name</label>
                  <input class="form-control" type="text" name="studentname" id="studentname" placeholder="Student Name">
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="class">Class</label>
                    <select name="class" class="form-control" id="">
                      @foreach ($classes as $item)
                        <option value="{{$item->classesname}}">{{$item->classesname}}</option>  
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Date of Birth</label>
                    <input class="form-control" type="date" name="bdate" placeholder="Birth Date">
                  </div>
                </div>
               <div class="form-group row">
                  <div class="col-md-4">
                    <input class="form-control" type="text" name="rollno" placeholder="RollNo">
                  </div>
                  <div class="col-md-4">
                    <input class="form-control" type="text" name="date" placeholder="Examination Date">
                  </div>
                  <div class="col-md-4">
                    <input class="form-control" type="time" name="time" placeholder="Time">
                  </div>
                </div> 
                <div class="form-group">
                    <select name="subject" class="form-control" id="">
                      <option selected disabled>Choose Student Subject</option>
                      <option value="Computer">Computer</option>
                    </select>
                </div>
                <div class="form-group">
                  <button class="btn btn-success col-12 font-weight-bold text-uppercase">Add Student</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endsection