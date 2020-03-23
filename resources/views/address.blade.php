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
</head>
<body>
    <div class="container">
    <div class="row">
       <div class="col-md-8 offset-2">
       <form method="POST" action="{{ route('user.postAddress') }}">
        @csrf
               <br/>
               <h1 class="text-center">Provide Your Address</h1>
               

               @if(count($errors) > 0)
              <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  @foreach($errors->all() as $error)
                     <p>{{ $error }}</p>
                  @endforeach
              </div>
             @endif 

             <img src="/images/van.png" alt="Van images" style="height:150px; width:150px; margin-left:250px; margin-right:auto;" />
             <div class="row">
                    <div class="col-md-5 form-group">
                        <label>First Name</label>
                        <input type="text" name="firstName" id="firstName" placeholder="First Name" class="form-control" />
                    </div>
                    <div class="col-md-6 offset-1 form-group">
                        <label>Last Name</label>
                        <input type="text" name="lastName" id="lastName" placeholder="Last Name" class="form-control" />
                    </div>
            </div>

            <div class="form-group">
                <label>Address 1</label>
                <input type="text" name="address1" id="address1" placeholder="1234 Main Street" class="form-control" />
            </div>
            <div class="form-group">
                <label>Address 2</label>
                <input type="text" name="address2" id="address2" placeholder="Appartment or suite" class="form-control" />
            </div>

            <div class="row">
                <div class="col-md-4 form-group">
                    <label>Country</label>
                    <select class="form-control" id="country" name="country">
                        <option>Choose..</option>
                        <option>India</option>
                        <option>Australia</option>
                        <option>New Zealand</option>
                        <option>Bangladesh</option>
                    </select>
                </div>

                <div class="col-md-4 form-group">
                    <label>State</label>
                    <select class="form-control" id="state" name="state">
                        <option>Choose..</option>
                        <option>Maharashtra</option>
                        <option>Hyderabad</option>
                        <option>Delhi</option>
                        <option>Bangalore</option>
                        <option>Lucknow</option>
                        <option>Varanasi</option>
                    </select>
                </div>

                <div class="col-md-4 form-group">
                    <label>Pincode</label>
                   <input type="number" id="zipcode" name="zipcode" placeholder="Zipcode" class="form-control">
                    
                </div>
            </div>
            <div style="padding-top: 20px;">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
            </div>
           </form>
       </div>

    </div>

    </div>
</body>
</html>