<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
</head>
<body>
    <div class="container">
    <br/>
    <h2 class="text-center">My Selected Service</h2>
    @if(session('status'))
      <div class="alert alert-success">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>{{ session('status') }}
      </div>
    @endif
      <table class="table table-hovered table-striped">
        <thead>
        <tr>
          <td>Services</td>
          <td>Title</td>
          <td>Description</td>
          <td>Qunatity</td>
          <td>Price</td>
        </tr>  
        <thead>
       
        <tbody>
        @if(Session::has('cart'))
        @foreach($products as $product)
        <tr>
          <td><img src="{{ $product['item']['imagePath'] }}" alt="Some image" style="height:50px;"/></td>
          <td>{{ $product['item']['title'] }} </td>
          <td>{{ $product['item']['description']}}</td>
          <td>{{ $product['qty']}}</td>
          <td>{{ $product['price']}}</td>
          </tr>
         @endforeach 
         @else
            <tr>
             <td colsapn="5">No Items to display</td>
            </tr>
         @endif
          <tr>
          <td style="align-right">Total Price :{{ $totalPrice }}</td>
          <td><a type="submit" class="btn btn-success" href="{{ route('user.getAddress') }}">Checkout</a></td>
          </tr>
        </tbody>
      </table>
    </div>
</body>
</html>