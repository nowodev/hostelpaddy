@auth('agent')
@else
  @auth('student')
    <div class="card-img-overlay">
      @if (auth('student')->user()->isFavorited($hostel))
        <form action="{{ route('student.unfave', [$hostel]) }}" method="POST" class="inline-flex clearfix float-right">
          @csrf
          @method('DELETE')
          <button>
            <button class="btn">
              <img src="{{ asset('main/img/loved.png') }}" alt="Card image cap">
            </button>
          </button>
        </form>
      @else
        <form action="{{ route('student.fave', [$hostel]) }}" method="POST" class="inline-flex clearfix float-right">
          @csrf
          @method('PUT')
          <button>
            <button class="btn">
              <img src="{{ asset('main/img/love.png') }}" alt="Card image cap">
            </button>
          </button>
        </form>
      @endif
    </div>
  @endauth

  @guest('student')
    <div class="card-img-overlay">
      <form action="{{ route('student.fave', [$hostel]) }}" method="POST" class="inline-flex clearfix float-right">
        @csrf
        @method('PUT')
        <button>
          <button class="btn">
            <img src="{{ asset('main/img/love.png') }}" alt="Card image cap">
          </button>
        </button>
      </form>
    </div>
  @endguest
@endauth
