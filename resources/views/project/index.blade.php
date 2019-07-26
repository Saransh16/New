<!doctype html>
    <head>
        <link rel ="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />  
        <title>
            My project
        </title>
        <!-- <style>
            table{
                
                border: 2px solid black;
			    border-collapse: collapse;
			    width: 500px;
            }
            th,td{
			border: 1px solid black;
			padding: 5px;
			text-align: center;
		}	


		th{
			background-color: skyblue;
            white-space: nowrap;
		}
        td{
            white-space: nowrap;
        }
        </style> -->
    </head>


    <body>
        
        <div class="float-right" role="group">
        <button type="button" class="btn btn-primary">Create New</button>
        </div>
        <h1 align="center"> Student Details </h1>
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
            <td scope="row">{{$student->dob}} </td>
            <td scope="row"><button type="button" class="btn btn-primary">View</button> 
                <button type="button" class="btn btn-primary">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </td>
        <tr>
        </tbody>
        @endforeach
        </table>
    </body>
</html>

