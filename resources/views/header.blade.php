
<div class="row">
  <div class="col-12 text-end py-2 px-3" style="background-color: #D9D9D9;">
    <div class=" container">
      <button class="btn btn-outline-secondary btn-sm rounded-pill me-2" type="button" onclick="toggleLoginModal()">
        <i class="fa-regular fa-user me-1"></i> Login/Register
      </button>
      <button class="btn btn-outline-secondary btn-sm rounded-circle" onclick="openCart()">
        <i class="fa-solid fa-cart-shopping"></i>
      </button>
    </div>
  </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#" onclick="goToHomePage()">
      <h2 class="mb-0">◀︎Apexx</h2>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body ">
        <ul class="navbar-nav justify-content-center flex-grow-1">
          <li class="nav-item mx-4">
            <a class="nav-link active" href="#" onclick="navigateTo('home')">Home</a>
          </li>
          <li class="nav-item mx-4">
            <a class="nav-link" href="#" onclick="navigateTo('about')">About Us</a>
          </li>
          <li class="nav-item mx-4">
            <a class="nav-link" href="#" onclick="navigateTo('product')">Product</a>
          </li>
          <li class="nav-item mx-4">
            <a class="nav-link" href="#" onclick="navigateTo('contact')">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>