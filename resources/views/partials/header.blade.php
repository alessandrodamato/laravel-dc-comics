<header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item me-3">
            <a class="nav-link" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link" href="{{route('comics.index')}}">I nostri Fumetti</a>
          </li>
          @if(Route::currentRouteName() !== 'comics.create')
            <li class="nav-item me-3">
              <a class="btn btn-success" href="{{route('comics.create')}}">+</a>
            </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>
</header>
