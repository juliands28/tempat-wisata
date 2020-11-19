 <!-- nav awal -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-travel fixed-top navbar-fixed-top" data-aos="fade-down">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}"><img src="/images/Tripsgent.svg" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
          <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- nav akhir -->