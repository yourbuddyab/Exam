@extends('/layouts.sidebar')
@section('admin')
<style>
  .btn-custom {
    padding: 0.255rem 0.50rem !important;
  }

  .custom-control-label {
    top: 2px;
  }

</style>
<div class="container" style="margin-top: .04rem!important;">
  <div class="row">
    <div class="col-md-12 mx-auto">
      <div class="card">
        <div class="card-header">Add Questions</div>
        <div class="card-body">
          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif
          <form action="/exam" method="post">
            @csrf
            <div class="form-group">
              <input class="form-control" type="text" name="que" placeholder="Question?">
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <input class="form-control" type="text" name="opt1" placeholder="A">
              </div>
              <div class="col-md-6">
                <input class="form-control" type="text" name="opt2" placeholder="B">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <input class="form-control" type="text" name="opt3" placeholder="C">
              </div>
              <div class="col-md-6">
                <input class="form-control" type="text" name="opt4" placeholder="D">
              </div>
            </div>
            <div class="form-group">
              <input class="form-control" type="text" name="ans" placeholder="Enter Answer">
            </div>
            <div class="form-group">
              <button class="btn btn-success col-12 font-weight-bold text-uppercase">Add Question</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
