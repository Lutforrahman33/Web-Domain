  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class=" navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('/img/logo1.png') }}" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse justify-content-between" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                  
                    </ul>
                    <!-- Right Side Of Navbar -->
                     <ul class="navbar-nav navbar-right">
                       <li class="nav-item">
                           <a class="nav-link" href="/">Home</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link calltoaction" href="{{ route('domain.create') }}">Start your Domain</a>
                       </li>
                    </ul>

                </div>
            </div>
        </nav>