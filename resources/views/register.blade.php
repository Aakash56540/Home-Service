<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <div class="col-md-4 offset-4" >
        <form method="POST" action="{{ route('user.register') }}">
            @csrf
            <br/>
            <h1 class="text-center" style="text-decoration: underline; color:blue;">Register Here</h1>

            @if(count($errors) > 0)
            <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                @foreach($errors->all() as $error)
                   <p>{{ $error }}</p>
                @endforeach
            </div>
            @endif
            <div class="form-group" style="padding-top: 15px">
                {{-- <label style="font-weight:bold; font-size: 20px ">Name</label> --}}
                <input type="text" id="name" name="name" placeholder="Name.." class="form-control"/>
            </div>
           
            <div class="form-group" style="padding-top: 15px">
               {{-- <label style="font-weight:bold; font-size: 20px ">Email</label> --}}
               <input type="text" id="email" name="email" placeholder="Email.." class="form-control" />
           </div>

           <div class="form-group" style="padding-top: 15px">
                {{-- <label style="font-weight:bold; font-size: 20px ">Password</label> --}}
                <input type="password" id="password" name="password" placeholder="Password.." class="form-control"/>
           </div>

           <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>
</body>
</html>