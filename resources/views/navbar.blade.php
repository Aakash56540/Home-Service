@section('content')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="{{ route('product.index') }}">ShoppingCart</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      <a class="nav-link" href="{{ route('product.index') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="{{ route('product.index') }}">Services</a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Welcome {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         @if(Auth::check())
              <a class="dropdown-item" href="{{ route('user.orders') }}">My Orders</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a>
         @else
             <a class="dropdown-item" href="{{ route('user.getRegister') }}">Register</a>
             <a class="dropdown-item" href="{{ route('user.getLogin') }}">Login</a>
         @endif 
        
        
        </div>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="{{ route('getCart') }}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart
      <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
      </a>
      </li>
    </ul>
    
  </div>
</nav>
@show
