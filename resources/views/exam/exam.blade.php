<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Add Questions</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/inc/TimeCircles.js"></script>
    <link rel="stylesheet" href="/inc/TimeCircles.css" />
    <style>
      .btn-custom {
        padding: 0.255rem 0.50rem !important;
      }

      .custom-control-label {
        top: 2px;
      }

    </style>
  </head>
  <body>
    <div class="bg-dark p-3 text-white container-fluid">
      <div class="row">
        <div class="col-md-4">
          <h4> {{ session('name')->studentname }}</h4>
        </div>
        <div class="col-md-4">
          <h4 class="text-center">Exam</h4>
        </div>
        <div class="col-md-4">
          <div id="DateCountdown" data-date="2014-01-01 00:00:00" class="text-center" style="width: 400px; padding: 0px; box-sizing: border-box; position: absolute; top: 0; left: 10px;"></div>
          <div class="h4" style="position: absolute; top: -5px ;left: 282px; font-size: 31px;">  Remaining</div>
          <div class="" style="padding: 10px;">
            <input hidden type="date" id="date" value="{{ session('name')->date}}">
            <input hidden type="time" id="time" value="{{ session('name')->time}}">
        </div>  
        <script>
          $("#DateCountdown").TimeCircles();
          $("#CountDownTimer").TimeCircles({ time: { Days: { show: false }, Hours: { show: false } }});
          $("#PageOpenTimer").TimeCircles();
          
          var updateTime = () => {
              var date = $("#date").val();
              var time = $("#time").val();
              var datetime = date + ' ' + time + ':00';
              $("#DateCountdown").data('date', datetime).TimeCircles().start();
              var arjun = $(".time_Hours").html();
          }
          updateTime();

     
</script> 
        </div>
      </div>
    </div>
    <section class="main mt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">Questions</div>
              <div class="card-body">
                <h1>{{$exam->id}}. {{$exam->que}}</h1>
                <div class="dropdown-divider"></div>
                <form action="/check/answer" class="deleteForm" method="post">
                  @csrf
                  {{-- <input type="hidden" name="_token" value="@csrf"> --}}
                  <input type="hidden" name="student_id" id="student_id" value="{{ session('name')->id }}">
                  <input type="hidden" name="exams_id" id="exams_id" value="{{$exam->id}}">
                </form>
                <form action="/answer" class="container mt-3 mainform" method="post">
                  @csrf
                  <input type="hidden" name="student_id" value="{{ session('name')->id }}">
                  <input type="hidden" name="exams_id" value="{{$exam->id}}">
                  <div class="form-group row">
                    <div class="custom-control custom-radio col-4">
                      <span class="pr-4">(A)</span><input type="radio" class="custom-control-input" id="opt1" name="answer" value="{{$exam->opt1}}" onchange="this.form.submit()">
                      <label class="custom-control-label" for="opt1"></label><span>{{$exam->opt1}}</span>
                    </div>
                    <div class="custom-control custom-radio col-4">
                      <span class="pr-4">(B)</span><input type="radio" class="custom-control-input" id="opt2" name="answer" value="{{$exam->opt2}}" onchange="this.form.submit()">
                      <label class="custom-control-label" for="opt2"></label>{{$exam->opt2}}
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="custom-control custom-radio col-4">
                      <span class="pr-4">(C)</span><input type="radio" class="custom-control-input" id="opt3" name="answer" value="{{$exam->opt3}}" onchange="this.form.submit()">
                      <label class="custom-control-label" for="opt3"></label>{{$exam->opt3}}
                    </div>
                    <div class="custom-control custom-radio col-4">
                      <span class="pr-4">(D)</span><input type="radio" class="custom-control-input" id="opt4" name="answer" value="{{$exam->opt4}}" onchange="this.form.submit()">
                      <label class="custom-control-label" for="opt4"></label>{{$exam->opt4}}
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <div>
                  @foreach ($all as $key => $id)
                  <a href="/exam/{{$id->id}}" class="btn btn-custom btn-outline-primary mb-2">{{$key+1}}</a>
                  @endforeach
                </div>
                <div>
                  <form id="submit" action="/score-card" method="post">
                    @csrf
                    <input type="hidden" name="student_id" value="{{ session('name')->id }}">
                    <button class="btn btn-primary text-white col-12 text-uppercase font-weight-bold">submit</button>
                  </form>
                  <script>
                       $(document).ready(function () {     
                        setInterval(function(){
                          if($(".time_Hours").html()==0 && $(".time_Minutes").html()==0 && $(".time_Seconds").html()==0){
                            $('#submit').submit();
                          }          
                        }, 1000);  
                        }); 
                  </script>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> --}}
    <script>
      $(document).ready(function() {
        const student_id = $('#student_id').val();
        const exams_id = $('#exams_id').val();
        const _token = $('input[name="_token"]').val();
        console.log(_token);
        // Instead of button click, change this.
        setTimeout(function() {
          jQuery.support.cors = true;
          $.ajax({
            crossDomain: true,
            async: true,
            type: "POST",
            url: "/check/answer",
            data: {
              'student_id': student_id,
              'exams_id': exams_id,
              '_token': _token
            },
            success: function(result) {
              console.log(result);
              $(document).find('.deleteForm').remove();
              if (result != null) {
                console.log('here');
                $(".deleteitem").each(function() {
                  $(this).find('div').remove();
                });
                //   $(document).find('.custom-control-input').remove();
                const opt1 = $('#opt1').val();
                const opt2 = $('#opt2').val();
                const opt3 = $('#opt3').val();
                const opt4 = $('#opt4').val();
                if (opt1 == result) {
                  $("#opt1").attr('checked', true);
                } else if (opt2 == result) {
                  $("#opt2").attr('checked', true);
                } else if (opt3 == result) {
                  $("#opt3").attr('checked', true);
                } else {
                  $("#opt4").attr('checked', true);
                }
                var input =
                 $(".mainform").append(input);
              } else {
                console.log('Not Deleted');
              }
            }
          });
        });
      });
    </script>
</body>
</html>
