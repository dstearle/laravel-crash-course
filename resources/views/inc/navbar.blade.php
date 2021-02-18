<nav class="navbar navbar-expand-md navbar-dark bg-dark">

    {{-- Navbar Brand --}}
    <a class="navbar-brand" href="/">{{config('app.name', 'Laravel Crash Course')}}</a>

    {{-- Collapse Button --}}
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    {{-- Navbar List --}}
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">

      <ul class="navbar-nav mr-auto">

        {{-- Home --}}
        <li class="nav-item">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>

        {{-- About --}}
        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li>

        {{-- Services --}}
        <li class="nav-item">
          <a class="nav-link" href="/services">Services</a>
        </li>

      </ul>

    </div>

  </nav>