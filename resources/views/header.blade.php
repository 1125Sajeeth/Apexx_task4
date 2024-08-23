<!-- <div class="row">
  <div class="col-12 text-end  pe-3" style="background-color: #D9D9D9;">
    <button class="btn p-1 m-1 me-2 rounded-4 bg-white" type="button">
      <i class="fa-regular fa-user"></i>
      Login/Register
    </button>
    <button class="btn me-2">
      <i class="fa-solid fa-cart-shopping fa-1x"></i>
    </button>
  </div>
 
  <div class="col-12 bg-dark">
    <nav class="navbar navbar-expand-lg navbar-dark ">
      <div class="container-fluid">
        <h2 class="text-white">Apexx</h2>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasNavbar2">
          <div class="offcanvas-header">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-center flex-grow-1 p-2">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About-Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </div>
</div> -->


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