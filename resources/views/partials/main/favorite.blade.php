@auth('agent')
@else
  @auth('student')
    <div class="card-img-overlay">
      <form action="{{ route('student.fave', [$hostel]) }}" method="POST" class="inline-flex float-right">
        @csrf
        @method('PUT')
        <button>
          @auth('student')
            @if (auth('student')->user()->hasFavorited($hostel))
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
  @else
    <div class="card-img-overlay">
      <form action="{{ route('student.fave', [$hostel]) }}" method="POST" class="inline-flex float-right">
        @csrf
        @method('PUT')
        <button>
          @auth('student')
            @if (auth('student')->user()->hasFavorited($hostel))
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
  @endauth
@endauth
