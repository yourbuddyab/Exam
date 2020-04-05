{{-- @extends('exam.layout.layout') --}}
@extends('/layouts.sidebar')
  @section('admin')
    <div class="container" style="margin-top: .04rem!important;">     
      <div class="row">
        <div class="col-md-12 mx-auto mt-5">
          <div class="card">
            <div class="card-header">Add Student</div>
            <div class="card-body">
              <form action="/student" method="post">
                @csrf 
                <div class="form-group">
                  <input class="form-control" type="text" name="studentname" placeholder="Student Name">
                </div>
                <div class="form-group">
                  <input class="form-control" type="text" name="class" placeholder="Class">
                </div>
                <div class="form-group">
                  <input class="form-control" type="date" name="bdate" placeholder="Birth Date">
                </div>
                <div class="form-group">
                  <input class="form-control" type="text" name="rollno" placeholder="RollNo">
                </div>
                <div class="form-group row">
                  <div class="col-md-6">
                    <input class="form-control" type="text" name="date" placeholder="Exam Date">
                  </div>
                  <div class="col-md-6">
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