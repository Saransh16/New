<!doctype html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title> Edit Student </title>
    </head>
    <body>
        <h1 align="center"> Update the Existing Details </h1>
        <br>
            
            <form  align="center" method="POST" action="/projects/{{ $student->id }}">
            @method('PATCH')
            @csrf 

            <div class="container">
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label"> First name </label>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" name="firstname" placeholder="Enter your first name" value="{{$student->firstname}}">
                    </div>
                    @if($errors->has('firstname')) 
                                    
                            <div class="col-sm-13">
                                <small class="text-danger">
                                @foreach($errors->get('firstname') as $error)
                                    {{ $error }}
                                @endforeach 
                                </small>      
                            </div>                      
                    @endif
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
            <label><h2> Courses </h2> </label>
            </div>
            
            @foreach($courses as $course)                       
                
                <input type="checkbox" name="course_name[]" value="{{$course->id}}"
                 @if($student->courses->contains($course->id)) checked="checked" 
                 @endif> {{$course->course_name}}
                
            @endforeach                      
            
            <br><br>

            <button type="submit" class="btn btn-primary">Update</button> <a href="{{route('projects.index')}}" class="btn btn-danger">Cancel </a>

                

            </form>
            

        
        </body>
</html>