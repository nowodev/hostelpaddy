<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Hostel Paddy')</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

  <!-- Styles -->
  @notifyCss
  <link rel="stylesheet" href="{{ asset('main/vendor/bootstrap-5.1.0-dist/css/bootstrap.min.css') }}">
</head>

<body>
  @include('layouts.admin.navigation')

  {{-- Print out message from controller --}}
  <x:notify-messages/>
  {{-- Print out message from controller --}}

  <div class="container">
    @yield('content')
  </div>

  @notifyJs
  <script src="{{ asset('main/vendor/jquery/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset('main/vendor/bootstrap-5.1.0-dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('main/vendor/fontawesome/d7644e187f.js') }}"></script>

  @yield('script')

  {{-- <script>
    var featureModal = document.getElementById('featureModal')
    featureModal.addEventListener('show.bs.modal', function(event) {
      // Button that triggered the modal
      var button = event.relatedTarget
      // Extract info from data-bs-* attributes
      var recipient = button.getAttribute('data-bs-whatever')
      // If necessary, you could initiate an AJAX request here
      // and then do the updating in a callback.
      //
      // Update the modal's content.
      var modalTitle = featureModal.querySelector('.modal-title')
      var modalBodyInput = featureModal.querySelector('.modal-body input')

      modalTitle.textContent = 'Add ' + recipient
      modalBodyInput.value = recipient
    })
  </script> --}}
</body>

</html>
