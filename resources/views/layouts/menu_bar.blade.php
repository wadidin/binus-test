<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('pmb') }}">PMB</a>
      </li>
 
      <li class="nav-item">
        <a class="nav-link" href="{{ url('login') }}">Login</a>
      </li>
 
     
    </ul>
   
  </div>
</nav>