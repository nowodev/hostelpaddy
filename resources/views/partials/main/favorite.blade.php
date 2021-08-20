@auth('agent')
@else
  @auth('student')
    <div class="position-absolute love">
      @if (auth('student')->user()->isFavorited($hostel))
        <form action="{{ route('student.unfave', [$hostel]) }}" method="POST">
          @csrf
          @method('DELETE')
          <button>
            <img src="{{ asset('main/img/loved.png') }}" alt="Card image cap">
          </button>
        </form>
      @else
        <form action="{{ route('student.fave', [$hostel]) }}" method="POST">
          @csrf
          @method('PUT')
          <button>
            <img src="{{ asset('main/img/love.png') }}" alt="Card image cap">
          </button>
        </form>
      @endif
    </div>
  @endauth

  @guest('student')
    <div class="position-absolute love">
      <form action="{{ route('student.fave', [$hostel]) }}" method="POST">
        @csrf
        @method('PUT')
        <button>
          <img src="{{ asset('main/img/love.png') }}" alt="Card image cap">
        </button>
      </form>
    </div>
  @endguest
@endauth
