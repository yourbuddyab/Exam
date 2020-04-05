@extends('/layouts.sidebar')
@section('admin')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Student</th>
                    <th scope="col">Class</th>
                    <th scope="col">Marks</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($result as $key => $item)
                    <tr>
                      <th scope="row">{{$key+1}}</th>
                      <td>{{$item->studentname}}</td>
                      <td>{{$item->class}}</td>
                      <td>{{$item->Answer}}</td>
                    </tr>                          
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>    
</div>
@endsection