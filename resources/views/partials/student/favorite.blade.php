<div class="card-img-overlay">
  @if (auth('student')->user()->isFavorited($hostel))
    <form action="{{ route('student.sharedUnfave', [$hostel]) }}" method="POST" class="inline-flex clearfix float-left">
      @csrf
      @method('DELETE')
      <button>
        <button class="btn mt-n4 ml-n4">
          <img src="{{ asset('main/img/loved.png') }}" alt="Card image cap">
        </button>
      </button>
    </form>
  @else
    <form action="{{ route('student.sharedFave', [$hostel]) }}" method="POST" class="inline-flex clearfix float-left">
      @csrf
      @method('PUT')
      <button>
        <button class="btn mt-n4 ml-n4">
          <img src="{{ asset('main/img/love.png') }}" alt="Card image cap">
        </button>
      </button>
    </form>
  @endif
</div>
