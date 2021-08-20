<div class="position-absolute love">
  <form action="{{ route('student.fave', [$others]) }}" method="POST">
    @csrf
    @method('PUT')
    <button>
      @auth('student')
        @if (auth('student')->user()->hasFavorited($others))
          <img src="{{ asset('main/img/loved.png') }}" alt="Card image cap">
        @else
          <img src="{{ asset('main/img/love.png') }}" alt="Card image cap">
        @endif
      @else
        <img src="{{ asset('main/img/love.png') }}" alt="Card image cap">
      @endauth
    </button>
  </form>
</div>