@extends('exam.layout.layout')
    @section('section')
        <div class="p-3 text-white container-fluid">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-dark">
                            Login For Student
                        </div>
                        <div class="card-body p-5">
                          <form action="/" method="post">
                                @csrf
                                <div class="form-group row">
                                  <label class="col-md-2 text-dark my-auto" for="name">Student Name</label>
                                  <input type="text" class="col-md-10 form-control" name="studentName" id="name" placeholder="Enter Student Name">
                                </div>
                                <div class="form-group row">
                                  <label class="col-md-2 text-dark my-auto" for="bdate">Date of Birth</label>
                                  <input type="text" class="col-md-10 form-control" name="bdate" id="bdate" placeholder="Enter Your Date of Birth">
                                </div>
                                <div class="text-center">
                                    @if (session('error'))
                                        <h5 class="text-danger">{{session('error')}}</h5>
                                    @endif
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-info w-25">Login</button>
                                </div>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection