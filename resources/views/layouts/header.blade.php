<nav class="navbar navbar-expand-lg navbar-dark bg-yellow" data-aos="fade-down" data-aos-duration="2000">
    <div class="container-fluid d-flex">
      <a href="{{ route('home') }}"><img src="{{asset('images/ragna2.png')}}" alt="MPPL" class="logo navbar-brand"  data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="500"></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav"  data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="500">
          <li class="nav-item">
            <a class="nav-link {{request()->is('/') ? ' active' : ''}}" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{request()->is('donate') ? ' active' : ''}}" href="{{ route('donate') }}">Donate</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{request()->is('buy-items') ? ' active' : ''}}" href="{{ route('home.buy-item.form-buy-item') }}">Buy Items</a>
          </li>
		  
		  @if (Auth::guard('player')->check() == 1)
          <li class="nav-item">
		  	<a class="nav-link" href="{{ route('login.logout') }}">Logout</a>
	   	  </li>
		  <li class="nav-item">
		  	<div class="btn btn-danger" style="font-family: hansonbold">Cash: {{ Auth::guard('player')->user()->cash }}</div>
          </li>
		  @else
		  <li class="nav-item">
		  	<a class="nav-link {{request()->is('register') ? ' active' : ''}}" href="{{ route('home.register.create') }}">Register</a>
		  </li>
          @endif
          
        </ul>
      </div>
    </div>
  </nav>