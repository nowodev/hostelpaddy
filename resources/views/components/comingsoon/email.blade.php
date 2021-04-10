<div class="input-field-area">
  <form action="/mail" method="post" class="form-control">
    @csrf
    <input class="input" type="email" name="email" placeholder="Enter your email address here">
    <button class="submit">
      <img class="bell" src="{{ asset('comingsoon/assets/Bell.svg') }}" alt="bell icon"> notify me
    </button>
  </form>
</div>
