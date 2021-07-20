<div class="card-img-overlay">
  <form action="{{ route('student.fave', [$others]) }}" method="POST" class="inline-flex float-right">
    @csrf
    @method('PUT')
    <button>
      @auth('student')
        @if (auth('student')->user()->hasFavorited($others))
          <button class="btn">
            <img src="{{ asset('main/img/loved.png') }}" alt="Card image cap">
          </button>
        @else
          <button class="btn">
            <img src="{{ asset('main/img/love.png') }}" alt="Card image cap">
          </button>
        @endif
      @else
        <button class="btn">
          <img src="{{ asset('main/img/love.png') }}" alt="Card image cap">
        </button>
      @endauth
    </button>
  </form>
</div>