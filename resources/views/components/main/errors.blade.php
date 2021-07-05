<ul>
  @foreach ($errors->all() as $errors)
    <li class="text-danger">{{ $errors }}</li>
  @endforeach
</ul>
