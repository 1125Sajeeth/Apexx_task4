@extends('layout')

@section('content')

<section>
  {{-- Prodect start--}}
  <div class="container">
    <h1 class="text-center m-5">PRODUCT DETAILS</h1>
    <div class="row g-4">
      <div class="col-md-6 h-100">
        <div class="text-center">
          <img id="mainImage" src="{{ asset('/image/s-l1600 (1).webp') }}" class="img-fluid w-75" alt="Product Image">
        </div>
        <div class="thumbnail-slider-container d-flex align-items-center justify-content-center mt-3 mb-2">
          <button class="d-flex align-items-center justify-content-center border-0 bg-transparent slider-button prev" id="prevBtn">
            <i class="fs-3 fas fa-chevron-left"></i>
          </button>
          <div class="thumbnail-container d-flex overflow-hidden">
            <div role="button" class="product-thumbnail mx-1 active rounded-4 overflow-hidden" data-image="{{ asset('/image/s-l1600 (1).webp') }}">
              <img src="{{ asset('/image/s-l1600 (1).webp') }}" class="img-fluid w-100 h-auto object-fit-cover" alt="Thumbnail 1">
            </div>
            <div role="button" class="product-thumbnail mx-1 rounded-4 overflow-hidden" data-image="{{ asset('/image/s-l1600 (2).webp') }}">
              <img src="{{ asset('/image/s-l1600 (2).webp') }}" class="img-fluid" alt="Thumbnail 2">
            </div>
            <div role="button" class="product-thumbnail mx-1 rounded-4 overflow-hidden" data-image="{{ asset('/image/s-l1600 (3).webp') }}">
              <img src="{{ asset('/image/s-l1600 (3).webp') }}" class="img-fluid" alt="Thumbnail 3">
            </div>
            <div role="button" class="product-thumbnail mx-1 rounded-4 overflow-hidden" data-image="{{ asset('/image/s-l1600 (4).webp') }}">
              <img src="{{ asset('/image/s-l1600 (4).webp') }}" class="img-fluid" alt="Thumbnail 4">
            </div>
            <div role="button" class="product-thumbnail mx-1 rounded-4 overflow-hidden" data-image="{{ asset('/image/s-l1600 (5).webp') }}">
              <img src="{{ asset('/image/s-l1600 (5).webp') }}" class="img-fluid" alt="Thumbnail 5">
            </div>
            <div role="button" class="product-thumbnail mx-1 rounded-4 overflow-hidden" data-image="{{ asset('/image/s-l1600 (6).webp') }}">
              <img src="{{ asset('/image/s-l1600 (6).webp') }}" class="img-fluid" alt="Thumbnail 6">
            </div>
            <div role="button" class="product-thumbnail mx-1 rounded-4 overflow-hidden" data-image="{{ asset('/image/s-l1600 (7).webp') }}">
              <img src="{{ asset('/image/s-l1600 (7).webp') }}" class="img-fluid" alt="Thumbnail 7">
            </div>
          </div>
          <button class="d-flex align-items-center justify-content-center border-0 bg-transparent slider-button next" id="nextBtn">
            <i class="fs-3 fas fa-chevron-right"></i>
          </button>
        </div>
      </div>
      <div class="col-md-6 h-100">
        <h2 class=" mt-4 mt-md-0 mt-lg-0">Product Name</h2>
        <p>Description: Our organic cocoa/cacao powder is extracted from selected high quality cacao fruits our organic forest gardens and small holder farms. The cacao is organically processed to retain it's natural nutrients. Delicious in smoothies, shakes, hot chocolates and desserts.</p>
        <p>Model No: XXXXX</p>
        <p>Price: XXXXX</p>
        <div class="d-flex align-items-center">
          <div class="mr-3">Quantity:</div>
          <div class="btn-group " role="group" aria-label="Quantity">
            <button type="button" class="btn m-2 rounded btn-outline-secondary btn-sm quantity-btn">-</button>
            <input type="text" class="form-control text-center quantity-input align-self-center p-0" style="width: 40px; height: 40px;" value="1">
            <button type="button" class="btn m-2 rounded btn-outline-secondary btn-sm quantity-btn">+</button>
          </div>
        </div>
        <div class="d-flex align-items-center mt-3">
          <div class="mr-3">Weight:</div>
          <div class="btn-group" role="group" aria-label="Weight">
            <button type="button" class="btn m-1 m-lg-2 m-md-2 rounded-pill btn-sm bg-body-secondary weight-btn text-secondary active">1.5 kg</button>
            <button type="button" class="btn m-1 m-lg-2 m-md-2 rounded-pill btn-sm bg-body-secondary weight-btn text-secondary">1 kg</button>
            <button type="button" class="btn m-1 m-lg-2 m-md-2 rounded-pill btn-sm bg-body-secondary weight-btn text-secondary">500 gr</button>
            <button type="button" class="btn m-1 m-lg-2 m-md-2 rounded-pill btn-sm bg-body-secondary weight-btn text-secondary">250 gr</button>
          </div>
        </div>
        <div class="d-flex align-items-center mt-3">
          <div class="mr-3">Share:</div>
          <a href="#" class="btn btn-sm mr-2 fs-5"><i class="fa-solid fa-link"></i></a>
          <a href="#" class="btn btn-sm mr-2 fs-5"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" class="btn btn-sm mr-2 fs-5"><i class="fa-regular fa-envelope"></i></a>
          <a href="#" class="btn btn-sm fs-5"><i class="fa-brands fa-whatsapp"></i></a>
        </div>
        <button class="btn btn-primary mt-3 rounded-pill">Add to cart</button>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-12">
        <nav>
          <div class="nav nav-tabs justify-content-center custom-tabs border-bottom-0 mb-3" id="nav-tab" role="tablist">
            <a class="nav-item nav-link prodect_detail rounded-0 text-secondary active bg-body-secondary align-self-center py-1 px-2" id="nav-product-details-tab" data-toggle="tab" href="#nav-product-details" role="tab" aria-controls="nav-product-details" aria-selected="true" style="border-right: 2px solid black;">Product details</a>
            <a class="nav-item nav-link prodect_detail rounded-0 text-secondary bg-body-secondary py-1 px-2" id="nav-how-to-use-tab" data-toggle="tab" href="#nav-how-to-use" role="tab" aria-controls="nav-how-to-use" aria-selected="false" style="border-right: 2px solid black;">How to use</a>
            <a class="nav-item nav-link prodect_detail rounded-0 text-secondary bg-body-secondary py-1 px-2" id="nav-shipping-details-tab" data-toggle="tab" href="#nav-shipping-details" role="tab" aria-controls="nav-shipping-details" aria-selected="false">Shipping details</a>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-product-details" role="tabpanel" aria-labelledby="nav-product-details-tab">
            <ul>
              <li>To use Hale Cinnamon products, simply add a teaspoon to your favorite recipes like tea, smoothies, or baked goods for a warm, aromatic flavor.</li>
              <li>It can also be sprinkled over oatmeal or mixed into yogurt for a nutritious boost.</li>
              <li>For a soothing drink, stir it into hot water with honey. Hale Cinnamon is versatile, enhancing both sweet and savory dishes with its rich, natural taste.</li>
              <li>Items must be returned in their original, unopened, and undamaged packaging.</li>
              <li>A copy of your original receipt or packing slip is required for all returns.</li>
              <li>We cannot accept returns for items that have been used or tampered with.</li>
              <li>We cannot accept returns for perishable items.</li>
            </ul>
          </div>
          <div class="tab-pane fade" id="nav-how-to-use" role="tabpanel" aria-labelledby="nav-how-to-use-tab">
            <ul>
              <li>To use Hale Cinnamon products, simply add a teaspoon to your favorite recipes like tea, smoothies, or baked goods for a warm, aromatic flavor.</li>
              <li>It can also be sprinkled over oatmeal or mixed into yogurt for a nutritious boost.</li>
            </ul>
          </div>
          <div class="tab-pane fade" id="nav-shipping-details" role="tabpanel" aria-labelledby="nav-shipping-details-tab">
            <ul>
              <li>Shipping details go here.</li>
              <li>To personalize your experience on our Website.</li>
              <li>To improve our Website and services.</li>
              <li>To process your orders and fulfill your requests.</li>
              <li>To send you important information about your orders, including order confirmations and shipping notifications.</li>
              <li>To send you marketing communications, such as newsletters and promotional offers, if you have opted-in to receive them.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- Prodect end--}}

  {{-- Recommended Prodect start--}}
  <div class="bg-white">
    <div class="container mt-5 mb-4 p-5 p-lg-0 p-md-0">
      <h3 class="pt-5 mb-4 text-black fw-bold text-start">Recommended Product</h3>
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col">
          <div class="card all-prodect h-100 rounded-4 overflow-hidden">
            <a href="#" class="text-decoration-none">
              <img src="{{ asset('/image/1.jpg') }}" class="card-img-top" alt="Organic Ceylon Alba Cinnamon Sticks">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title text-center text-black fw-bold">Prodect name</h5>
                <p class="card-text text-center flex-grow-1" style="color: #707070;">Products that promote a healthy lifestyle.</p>
                <a href="#" class="rounded-pill btn btn-primary fw-bold text-black mt-3" style=" font-size: 0.9rem; border: none;">VIEW PRODUCT</a>
              </div>
            </a>
          </div>
        </div>
        <div class="col">
          <div class="card all-prodect h-100 rounded-4 overflow-hidden">
            <a href="#" class="text-decoration-none">
              <img src="{{ asset('/image/2.webp') }}" class="card-img-top" alt="Organic Ceylon Alba Cinnamon Sticks">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title text-center text-black fw-bold">Prodect name</h5>
                <p class="card-text text-center flex-grow-1" style="color: #707070;">Products that promote a healthy lifestyle.</p>
                <a href="#" class="rounded-pill btn btn-primary fw-bold text-black mt-3" style=" font-size: 0.9rem; border: none;">VIEW PRODUCT</a>
              </div>
            </a>
          </div>
        </div>
        <div class="col">
          <div class="card all-prodect h-100 rounded-4 overflow-hidden">
            <a href="#" class="text-decoration-none">
              <img src="{{ asset('/image/3.png') }}" class="card-img-top" alt="Organic Ceylon Alba Cinnamon Sticks">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title text-center text-black fw-bold">Prodect name</h5>
                <p class="card-text text-center flex-grow-1" style="color: #707070;">Products that promote a healthy lifestyle.</p>
                <a href="#" class="rounded-pill btn btn-primary fw-bold text-black mt-3" style=" font-size: 0.9rem; border: none;">VIEW PRODUCT</a>
              </div>
            </a>
          </div>
        </div>
        <div class="col">
          <div class="card all-prodect h-100 rounded-4 overflow-hidden">
            <a href="#" class="text-decoration-none">
              <img src="{{ asset('/image/1.jpg') }}" class="card-img-top" alt="Organic Ceylon Alba Cinnamon Sticks">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title text-center text-black fw-bold">Prodect name</h5>
                <p class="card-text text-center flex-grow-1" style="color: #707070;">Products that promote a healthy lifestyle.</p>
                <a href="#" class="rounded-pill btn btn-primary fw-bold text-black mt-3" style=" font-size: 0.9rem; border: none;">VIEW PRODUCT</a>
              </div>
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>
  {{-- Recommended Prodect end--}}
</section>

@endsection