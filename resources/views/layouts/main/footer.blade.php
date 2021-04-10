<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <img src="{{ asset('main/home-img/footer_logo.png') }}" class="mb-3">
        <p class="footer-txt mb-3">Our goal is to make to make hostel accommodation accessible to all students
          across the
          country.</p>
        <div class="col-12 social padding">
          <a title="Hostel Paddy on Instagram" class="social-link" href="https://instagram.com/hostelpaddy">
            <i class="fab fa-instagram footer-icon"></i>
          </a>
          <a title="Hostel Paddy on Twitter" class="social-link" href="https://twitter.com/hostelpaddy">
            <i class="fab fa-twitter footer-icon"></i>
          </a>
          <a title="Hostel Paddy on Facebook" class="social-link" href="https://facebook.com/hostelpaddy1">
            <i class="fab fa-facebook footer-icon"></i>
          </a>
        </div>
        <p>&copy; 2021 Team Chernobyl</p>
      </div>
      <div class="col-md-4">
        <h5>Products</h5>
        <p><a href="{{ route('about') }}">About Us</a></p>
        <p><a href="{{ route('onboarding') }}">Sign up</a></p>
        <p><a href="{{ route('onboarding') }}">Login</a></p>
        <p><a href="https://blog.hostelpaddy.com" target="_blank">Blog</a></p>
        <p><a href="{{ route('hostels') }}">Listed hostels</a></p>
        <p><a href="#">House owners/agents</a></p>
      </div>
      <div class="col-md-4">
        <h5>Support</h5>
        <p><a href="{{ route('contact') }}">Contact Us</a></p>
        <p><a href="{{ route('faqs') }}">FAQs</a></p>
        <p><a href="{{ route('tos') }}">Terms of services</a></p>
        <p><a href="{{ route('privacy') }}">Privacy policy</a></p>
        <!-- </div> -->
      </div>
    </div>
</footer>
