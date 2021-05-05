<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title', 'Hostel Paddy')</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('main/vendor/bootstrap/css/bootstrap.min.css') }}">
  <link href="https://unpkg.com/tailwindcss@next/dist/tailwind.min.css" rel="stylesheet">

  <link type="text/css" rel="stylesheet" href="{{ asset('main/vendor/animate/css/animate.min.css') }}">
  <link type="text/css" rel="stylesheet" href="{{ asset('main/vendor/bootstrap/css/bootstrap.min.css') }}">
  <link type="text/css" rel="stylesheet" href="{{ asset('main/vendor/reset/css/reset.min.css') }}">
  <link type="text/css" rel="stylesheet" href="{{ asset('main/vendor/normalize/css/normalize.min.css') }}">
  <link type="text/css" rel="stylesheet" href="{{ asset('main/vendor/linearicons/css/linearicons.min.css') }}" />
  <link type="text/css" rel="stylesheet" href="{{ asset('main/vendor/fontawesome/css/fontawesome.min.css') }}" />
  <link type="text/css" rel="stylesheet" href="{{ asset('main/css/agent/dropzone.min.css') }}" />

  <link rel="stylesheet" href="{{ asset('main/css/agent/dropzone.min.css') }}">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <!--Replace with your tailwind.css once created-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"
    integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>
    <script src="{{ asset('main/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>

  <script src="{{ asset('main/js/agent/dropzone.min.js') }}"></script>


  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
  <div class="min-h-screen bg-gray-100">
    
    <form id="my-awesome-dropzone" action="/upload" class="dropzone">  
        <!-- HTML heavily inspired by http://blueimp.github.io/jQuery-File-Upload/ -->
<div class="table table-striped" class="files" id="previews">

    <div id="template" class="file-row">
      <!-- This is used as the file preview template -->
      <div>
          <span class="preview"><img data-dz-thumbnail /></span>
      </div>
      <div>
          <p class="name" data-dz-name></p>
          <strong class="error text-danger" data-dz-errormessage></strong>
      </div>
      <div>
          <p class="size" data-dz-size></p>
          <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
            <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
          </div>
      </div>
      <div>
        <button class="btn btn-primary start">
            <i class="glyphicon glyphicon-upload"></i>
            <span>Start</span>
        </button>
        <button data-dz-remove class="btn btn-warning cancel">
            <i class="glyphicon glyphicon-ban-circle"></i>
            <span>Cancel</span>
        </button>
        <button data-dz-remove class="btn btn-danger delete">
          <i class="glyphicon glyphicon-trash"></i>
          <span>Delete</span>
        </button>
      </div>
    </div>
  
  </div>
    
    </form>
    <button type="submit" id="submit-all" class="btn btn-primary btn-xs">Upload the file</button>
    
  </div>


  {{-- <script src="{{ asset('main/js/agent/dropzone-amd-module.js') }}"></script> --}}

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"
    integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous">
  </script>
  <!-- Vendor scripts -->
  <script src="{{ asset('main/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="{{ asset('main/js/script.js') }}"></script>

  <script>
      // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
var previewNode = document.querySelector("#template");
previewNode.id = "";
var previewTemplate = previewNode.parentNode.innerHTML;
previewNode.parentNode.removeChild(previewNode);

var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
  url: "/target-url", // Set the url
  thumbnailWidth: 80,
  thumbnailHeight: 80,
  parallelUploads: 20,
  previewTemplate: previewTemplate,
  autoQueue: false, // Make sure the files aren't queued until manually added
  previewsContainer: "#previews", // Define the container to display the previews
  clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
});

myDropzone.on("addedfile", function(file) {
  // Hookup the start button
  file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file); };
});

// Update the total progress bar
myDropzone.on("totaluploadprogress", function(progress) {
  document.querySelector("#total-progress .progress-bar").style.width = progress + "%";
});

myDropzone.on("sending", function(file) {
  // Show the total progress bar when upload starts
  document.querySelector("#total-progress").style.opacity = "1";
  // And disable the start button
  file.previewElement.querySelector(".start").setAttribute("disabled", "disabled");
});

// Hide the total progress bar when nothing's uploading anymore
myDropzone.on("queuecomplete", function(progress) {
  document.querySelector("#total-progress").style.opacity = "0";
});

// Setup the buttons for all transfers
// The "add files" button doesn't need to be setup because the config
// `clickable` has already been specified.
document.querySelector("#actions .start").onclick = function() {
  myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
};
document.querySelector("#actions .cancel").onclick = function() {
  myDropzone.removeAllFiles(true);
};
  </script>
</body>

</html>
