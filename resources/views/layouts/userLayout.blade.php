<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('./css/style.min.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>
        Bookstore | @yield('title')
    </title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
              <a class="navbar-brand" href="{{ route('home') }}">Bookstore</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                  </li>
                  <li class="nav-item mx-lg-2">
                    <a class="btn btn-outline-primary " href="{{ route('login') }}">Login</a>
                  </li> 
                  <li class="nav-item mx-lg-2">
                    <a class="btn btn-outline-light " href="{{ route('register') }}">Register</a>
                  </li> 
                
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <main >
        @yield('content')
    </main>

    {{-- script --}}
    <script src="{{ asset('./js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>