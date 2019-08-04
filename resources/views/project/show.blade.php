<!doctype html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title> Show Student </title>
    </head>
    <body>
        
        <div class="card w-100 text-center">
            <div class="card-header">
            <h1 align="center"> Details of Student </h1>
            </div>
            <div class="card-body">
                <h3 class="card-title">Personal Details of {{$student->firstname}}</h3>
                <p class="card-text">
                    Name : {{$student->firstname." ".$student->lastname}}<br>
                    Email : {{$student->email}} <br>
                    Phone No. : {{$student->contact}} <br>
                    DOB : {{$student->dob}}<br>
                    <h2 align="center"> Courses</h2><br>
                    
                        @foreach($student->courses as $course) 
                          {{$course->course_name}}
                            <br>
                        @endforeach
                </p>
                
            </div>        
        </div>

        
        <br>
        <div class="col text-center">
        <a href="{{route('projects.index')}}" class="btn btn-primary">Homepage </a>
        </div>
    </body>
</html>