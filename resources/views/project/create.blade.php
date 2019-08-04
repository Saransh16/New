<html>
    <head>
        <title> Create </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <body>
       <h1 align="center"> Create new user </h1>
       <br>
       <form align="center" method="POST" action="/projects/create">
       @csrf  
         
            
            <div class="container">
                <div class="form-group row">
                
                    <label class="col-sm-5 col-form-label"> First name </label>
                    <div class="col-sm-5">
                        <input  type="text" class="form-control input {{$errors->has('firstname') ? 'is-invalid' : ''}}" name="firstname" placeholder="Enter your first name" value="{{old('firstname')}}">
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
                <input class="form-control {{$errors->has('lastname') ? 'is-invalid' : ''}}" type="text" name="lastname" placeholder="Enter your last name" value="{{old('lastname')}}">                    
                </div>
                @if($errors->has('lastname')) 
                                    
                            <div class="col-sm-13">
                                <small class="text-danger">
                                @foreach($errors->get('lastname') as $error)
                                    {{ $error }}
                                @endforeach 
                                </small>      
                            </div>                      
                    @endif
                    
                </div>

                <div class="form-group row">
                <label class="col-sm-5 col-form-label"> Email </label>
                <div class="col-sm-5">
                <input class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" type="text" name="email" placeholder="Enter your email" value="{{old('email')}}">            
                </div>
                @if($errors->has('email')) 
                                    
                            <div class="col-sm-13">
                                <small class="text-danger">
                                @foreach($errors->get('email') as $error)
                                    {{ $error }}
                                @endforeach 
                                </small>      
                            </div>                      
                    @endif
                    
                </div>

                <div class="form-group row">
                <label class="col-sm-5 col-form-label"> Contact </label>
                <div class="col-sm-5">
                <input class="form-control {{$errors->has('contact') ? 'is-invalid' : ''}}" type="text" name="contact" placeholder="Enter your phone number" value="{{old('contact')}}">            
                </div>
                @if($errors->has('contact')) 
                                    
                            <div class="col-sm-13">
                                <small class="text-danger">
                                @foreach($errors->get('contact') as $error)
                                    {{ $error }}
                                @endforeach 
                                </small>      
                            </div>                      
                    @endif
                    
    



                <div class="form-group row">
                <label class="col-sm-5 col-form-label"> DOB(YYYY-MM-DD)</label>
                <div class="col-sm-5">
                <input class="form-control {{$errors->has('dob') ? 'is-invalid' : ''}}" type="text" name="dob" placeholder="YYYY-MM-DD" value="{{old('dob')}}">
                </div>
                </div>
                
                
                @if($errors->has('dob')) 
                                    
                            <div class="col-sm-18">
                                <small class="text-danger">
                                @foreach($errors->get('dob') as $error)
                                    {{ $error }}
                                @endforeach 
                                </small>      
                            </div>                      
                    @endif
                    
            </div>

            
            <h2 align="centre"> Courses </h2>        
                        
            <div class="form-check form-check-inline">                
            <input class="form-check-input" type="checkbox" name="course_name[]" value="1">Java Programming
            </div>

            <div class="form-check form-check-inline">                
            <input class="form-check-input" type="checkbox" name="course_name[]" value="2">C++
            </div>

            <div class="form-check form-check-inline">                
            <input class="form-check-input" type="checkbox" name="course_name[]" value="3">Digital Electronics and Circuits
            </div>
            
            <div class="form-check form-check-inline">                
            <input class="form-check-input" type="checkbox" name="course_name[]" value="4">Machine Learning
            </div>

            <div class="form-check form-check-inline">                
            <input class="form-check-input" type="checkbox" name="course_name[]" value="5">Neural Networks
            </div>

            <br><br>
            <button type="submit" class="btn btn-success">Submit</button>  
        </div>    
        </form>    
        
            
    </body>
</html>







