<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="/"><h4>Irfan Maulana</h4></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav ml-xl">
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Home') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'About') ? 'active' : '' }}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Project') ? 'active' : '' }}" href="/project">Project</a>
        </li>
        <li class="nav-item"> 
          <a class="nav-link {{ ($title === 'Contact') ? 'active' : '' }}" href="/contact">Contact</a>
        </li>
        
        
      </ul>
    </div>
  </div>
</nav>