@extends('/layouts.sidebar')
@section('admin')
<div class="container-fluid" style="margin-top: .04rem!important;">     
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="float-left">Student List</div>
            <div class="float-right"><a href="/student/create"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
          </div>
          <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Roll No</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Class</th>
                    <th scope="col">Date of Brith</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($student as $item)
                        <tr>
                        <th scope="row">{{$item->rollno}}</th>
                        <td>{{$item->studentname}}</td>
                        <td>{{$item->class}}</td>
                        <td>{{$item->bdate}}</td>
                        <td class="d-flex">
                          <a href="/student/{{$item->id}}"><i class="fa fa-edit text-dark mr-5"></i></a>
                          <form action="/student/{{$item->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn p-0">
                              <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
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