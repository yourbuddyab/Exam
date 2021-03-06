@extends('/layouts.sidebar')
@section('admin')
<div class="container">
    <div class="row">
        <div class="col-md-12">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
          @endif
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Question</th>
                    <th scope="col">Option</th>
                    <th scope="col">Answer</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($question as $key => $item)
                    <tr>
                      <th scope="row">{{$key+1}}</th>
                      <td>{{$item->que}}</td>
                      <td>A. <span class="text-primary">{{$item->opt1}}</span>  B. <span class="text-primary">{{$item->opt2}}</span> C. <span class="text-primary">{{$item->opt3}}</span> D. <span class="text-primary">{{$item->opt4}}</span></td>
                      <td>{{$item->ans}}</td>
                    <td>
                      <form action="exam/{{$item->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    </td>
                    </tr>                          
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>    
</div>
@endsection