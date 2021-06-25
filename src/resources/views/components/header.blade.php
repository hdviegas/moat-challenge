<header>
    <div class="bg-dark collapse" id="navbarHeader" style="">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">About</h4>
            <p class="text-muted">Welcome! My name is Hilthermann Viegas, I'm a PHP developer for 12+ years, focused on back-end but with a large experience as full-stack too. This project is part of the selection process purposed by Moat, hope you find it useful. If you have any questions, insights, or just want to talk, please feel free to reach me.</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Contact</h4>
            <ul class="list-unstyled">
              <li><a href="https://www.linkedin.com/in/hdviegas/" class="text-white" target="_blank">LinkedIn</a></li>
              <li><a href="https://www.instagram.com/hilthermann" class="text-white" target="_blank">Instagram</a></li>
              <li><a href="mailto:hdviegas@gmail.com" class="text-white" target="_blank">Email</a></li>
            </ul>
            <a href="{{ route('logout') }}" class="text-danger" target="_self">Logout</a>
          </div>
        </div>
      </div>
    </div>    
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="#" class="navbar-brand d-flex align-items-center">                    
          <strong>{{ $title }}</strong>
        </a>
        <div>          
          <span class="text-white pe-2">Hi, {{ Auth::user()->name }}</span>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </div>
  </header>