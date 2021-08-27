<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
      aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">Admin</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('admin.') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.hostels') }}">Hostels</a>
        </li>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown"
          aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="users">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="users" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Users
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="users">
                <li><a class="dropdown-item" href="{{ route('admin.users.agents') }}">Agents</a></li>
                <li><a class="dropdown-item" href="{{ route('admin.users.students') }}">Students</a></li>
              </ul>
            </li>
          </ul>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown"
          aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="features">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="features" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Features
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="features">
                <li><a class="dropdown-item" href="{{ route('admin.amenities.index') }}">Amenities</a></li>
                <li><a class="dropdown-item" href="{{ route('admin.utilities.index') }}">Utilities</a></li>
                <li><a class="dropdown-item" href="{{ route('admin.rules.index') }}">Rules</a></li>
                <li><a class="dropdown-item" href="{{ route('admin.properties.index') }}">Properties</a></li>
              </ul>
            </li>
          </ul>
        </div>

        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
