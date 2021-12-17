@if (session()->has('message'))
    <div class="alert alert-primary alert-dismissible" role="alert">
      <strong>{{ session('message') }}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif