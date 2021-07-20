@auth('student')
  <div class="card-img-overlay">
    <form action="{{ route('student.sharedFave', [$hostel]) }}" method="POST" class="inline-flex clearfix float-left">
      @csrf
      @method('PUT')
      <button>
        @auth('student')
          @if (auth('student')->user()->hasFavorited($hostel))
            <button class="btn mt-n4 ml-n4">
              <img src="{{ asset('main/img/loved.png') }}" alt="Card image cap">
            </button>
          @else
            <button class="btn mt-n4 ml-n4">
              <img src="{{ asset('main/img/love.png') }}" alt="Card image cap">
            </button>
          @endif
        @else
          <button class="btn mt-n4 ml-n4">
            <img src="{{ asset('main/img/love.png') }}" alt="Card image cap">
          </button>
        @endauth
      </button>
    </form>
  </div>
@else
  <div class="card-img-overlay">
    <form action="{{ route('student.sharedFave', [$hostel]) }}" method="POST" class="inline-flex float-right">
      @csrf
      @method('PUT')
      <button>
        @auth('student')
          @if (auth('student')->user()->hasFavorited($hostel))
            <i class="fa-2x fas fa-heart text-danger"></i>
          @else
            <img src="{{ asset('main/img/love.png') }}" alt="Card image cap">
          @endif
        @else
          <img src="{{ asset('main/img/love.png') }}" alt="Card image cap">
        @endauth
      </button>
    </form>
  </div>
@endauth
