<!doctype html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/javascript.util/0.12.12/javascript.util.min.js"></script>
        <link rel ="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />  
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Homepage
        </title>        
    </head>
    <body>

        <div class="container">
            <div class="float-right" role="group">
            <a href="{{route('projects.new')}}" class="btn btn-primary">Create New </a>
            </div>
            <h1 align="center"> Student Details </h1>
            <br>
            <table class="table"align="center">
            <thead>
            <tr>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact</th>
                <th scope="col">Date of Birth</th>
                <th scope="col">Action</th>
            <tr>
            </thead>    
            @foreach($students as $student)
            </tbody>
            <tr>
                <td scope="row">{{$student->firstname}}</td>
                <td scope="row">{{$student->lastname}} </td>
                <td scope="row">{{$student->email}} </td>
                <td scope="row">{{$student->contact}} </td>
                <td scope="row">{{$student->dob->format('d-m-Y')}} </td>
                <td scope="row"><a href="{{route('projects.show',$student->id)}} "class="btn btn-primary">View</a> 
                    <a href="{{route('projects.edit', $student->id)}}" class="btn btn-primary"> Edit </a> 
                    <button id="del" onclick="myFunction()" class="btn btn-danger">Delete</button>
                </td>
            <tr>
            </tbody>
            @endforeach
            </table>
            {{ $students->links() }}
        </div>    
</body>

    <script type="text/javascript">
        function myFunction() {

            if(confirm("Do you wish to Delete the Details\n of {{$student->firstname." ".$student->lastname}}"))
                {
                   window.location.href="{{route('projects.remove',$student->id)}}"
                }
            else
                {
                    window.location.href="{{route('projects.index')}}"
                }
            
        }
        document.getElementById("del").innerHTML = "Delete";
    </script>
    
 
  

</html>

