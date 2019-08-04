<!doctype html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title> Delete Student </title>
    </head>
    <body>
        <h1 align="center"> Delete Student Details </h1>
        <br>
            
        <form align="center"  method="POST" action="/projects/{{ $student->id }}">
            @method('DELETE')
            @csrf

            <div class="container">
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label"> First name </label>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" name="firstname" placeholder="Enter your first name" value="{{$student->firstname}}">
                    </div>
                </div>
                
            
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label"> Last name </label>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" name="firstname" placeholder="Enter your first name" value="{{$student->lastname}}">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label"> Email </label>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" name="firstname" placeholder="Enter your first name" value="{{$student->email}}">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label"> Contact </label>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" name="firstname" placeholder="Enter your first name" value="{{$student->contact}}">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label"> DOB </label>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" name="firstname" placeholder="Enter your first name" value="{{$student->dob}}">
                    </div>
                </div>
            </div>    
            
            <div>
            <h2> Courses </h2> 
            
            
            </div>
            
            @foreach($courses as $course)
                                
                
                {{$course->course_name}} 
                <br>
                
            @endforeach                      
            
            
            <br><br>

            <button type="submit" class="btn btn-primary">Delete</button> 
            <a href="{{route('projects.index')}}" class="btn btn-danger">Cancel </a>
            </form>
        
        </body>
</html>