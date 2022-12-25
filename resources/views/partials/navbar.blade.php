<div class=" container-fluid d-flex w-100 h-100 p-3 mx-auto flex-column text-white bg-dark">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">Lorem Hotel</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
        <a class="nav-link {{ ($title === "Rooms") ? 'active' : '' }}" href="/rooms">Rooms</a>
        <a class="nav-link {{ ($title === "About Us") ? 'active' : '' }}" href="/about">About Us</a>
        <a class="nav-link {{ ($title === "Sign In") ? 'active' : '' }}" href="/sign_in">Sign in</a>
      </nav>
    </div>
  </header>
</div>
