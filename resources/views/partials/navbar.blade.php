<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">

    <a class="navbar-brand" href="/">Bank Lampung</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Home | Antrean") ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Home | Data Teller 1") ? 'active' : '' }}" href="/teller1">Teller 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Home | Data Teller 2") ? 'active' : '' }}" href="/teller2">Teller 2</a>
        </li>
      </ul>
    </div>

  </div>
</nav>
