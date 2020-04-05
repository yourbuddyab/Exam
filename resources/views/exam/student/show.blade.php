@extends('/layouts.sidebar')
@section('admin')
    <div class="container" style="margin-top: .04rem!important;">     
      <div class="row">
        <div class="col-md-12 mx-auto mt-5">
          <div class="card">
            <div class="card-header">Student</div>
            <div class="card-body">
            <form action="/student/{{$student->id}}" method="post">
                @csrf 
                @method('PATCH')
                <div class="form-group">
                  <input class="form-control" type="text" name="studentname" value="{{$student->studentname}}" placeholder="Student Name">
                </div>
                <div class="form-group">
                  <input class="form-control" type="text" value="{{$student->class}}" name="class" placeholder="Class">
                </div>
                <div class="form-group">
                  <input class="form-control" type="date" value="{{$student->bdate}}" name="bdate" placeholder="Birth Date">
                </div>
                <div class="form-group">
                  <input class="form-control" type="text" value="{{$student->rollno}}" name="rollno" placeholder="RollNo">
                </div> 
                <div class="form-group">
                    <select name="subject" class="form-control" id="">
                      <option selected disabled>Choose Student Subject</option>
                      <option value="Computer" {{$student->subject == 'Computer' ? 'selected' : ''}}>Computer</option>
                    </select>
                </div>
                <div class="form-group">
                  <button class="btn btn-success col-12 font-weight-bold text-uppercase">Update Student</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endsection