<nav class="navbar navbar-expand-lg navbar-dark bg-yellow" data-aos="fade-down" data-aos-duration="2000">
    <div class="container-fluid d-flex">
      <a href="#"><img src="{{asset('images/ragna2.png')}}" alt="MPPL" class="logo navbar-brand"  data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="500"></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav"  data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="500">
          <li class="nav-item">
            <a class="nav-link {{request()->is('/') ? ' active' : ''}}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{request()->is('donate') ? ' active' : ''}}" href="/donate">Donate</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Buy Items</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>