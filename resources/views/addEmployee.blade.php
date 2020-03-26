<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
<style>
 .ahref{
    margin-left:30px; 
    color:white; 
    font-size:20px;
    
 }

 a:hover{
     color:white;
  }
</style>
</head>
<body>

<div style="background-color:black; color:white; height:70px;">
          <h1 style="margin-left:100px; font-family:Helvetica; padding-top:8px;">Admin Dashboard</h1>
          </div>
          <div class="container" style="margin-top:10px;">

<div class="sidebar" 
   style="height: 100%;
   width: 230px;
   position: fixed;
   z-index: 1;
   top: 8;
   color:white;
   left: 0;
   background-color: blue;
   overflow-x: hidden;
   padding-top: 20px;">

<a href="{{ route('admin.getUsers') }}" class="ahref"><i class="fa fa-user"></i> Users</a><hr>
<a href="{{ route('admin.services') }}" class="ahref"><i class="fa fa-tags"></i> Services</a><hr>
<a href="{{ route('admin.getAddProduct') }}" class="ahref"><i class="fa fa-plus"></i> Add Services</a><hr>
<a href="{{ route('admin.getOrders') }}" class="ahref"><i class="fa fa-shopping-bag"></i> Orders</a><hr>
<a href="{{ route('admin.getEmployee')}}" class="ahref"><i class="fa fa-user-circle"></i> Employee</a><hr>
<a href="{{ route('admin.getAddEmployee')}}" class="ahref"><i class="fa fa-plus"></i> Add Employee</a><hr>


</div>
         <div class="main" style="margin-left:160px; padding: 0px 10px;">

         @if(count($errors) > 0)
         <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
             @endforeach
         </div>
         @endif   

         @if(session('success'))
          <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>{{ session('success') }}
          </div>
         @endif
         <form action="{{ route('admin.postAddEmployee') }}" method="POST">
               @csrf
               <h2 class="text-center">Add Employee Details Here..</h2>
               <div class="form-group">
                <label>Employee Name</label>   
               <input class="form-control" name="name" type="text" placeholder="Name" />
               </div>

               <div class="form-group">
               <label>Email</label>
                <input class="form-control" name="email" type="text" placeholder="Email" />
               </div>

               <div class="form-group">
               <label>Salary</label>
                <input class="form-control" name="salary" type="number" placeholder="Salary" />
               </div>

               <div class="form-group">
               <label>Designation</label>
                <input class="form-control" name="designation" type="text" placeholder="Designation" />
               </div>
               <button type="submit" class="btn btn-primary">Submit</button>
           </form>

                
         </div>
    </div>
</body>
</html>