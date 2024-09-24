@extends('layout.default')
@section('Title','Card')
@section('main-content')
<!-- Product Section -->
<section class="product-section container">
    <div class="row">
      <div class="col-md-6">
        <img src="{{ asset('Image/aaachi.jpg') }}" alt="Product Image" class="img-fluid">
      </div>
      <div class="col-md-6">
        <h1 class="product-title">Saffola Masala Oats Veggie Twist 500g</h1>
        <p class="product-price">$8</p>
        <p class="availability">Availability: <span>Out of Stock</span></p>
        <a href="{{url('AddCard')}}" class="btn btn-dark w-100">Add to Cart</a>
        <div class="product-description mt-5">
          <h4>Description</h4>
          <p>Enjoy delicious and nutritious Saffola Masala Oats with a blend of vegetables and spices. Ready in minutes, perfect for any meal!</p>
          <ul>
            <li>Rich in fiber and protein</li>
            <li>Low in cholesterol</li>
            <li>Ingredients: Oats, Spices, Vegetables</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Reviews Section -->
  <section class="testimonials my-5">
    <h2 class="text-center mb-4">Customer Testimonials</h2>
    <p class="text-center mb-4">Read what our customers have to say about us</p>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4"> <!-- Adjusted for responsive behavior -->
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Jane Smith</h5>
                        <h6 class="card-subtitle mb-2 text-muted">CEO, XYZ Corporation</h6>
                        <p class="card-text">"Tamco has the best selection of fresh produce. I always find what I need."</p>
                    </div>
                    <div class="star-rating mt-auto text-center">
                        &#9733; &#9733; &#9733; &#9733; &#9733;
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 h-100 text-center">
                    <!-- Add Image inside a circular frame -->
                    <div class="img-container mb-3">
                        <img src="{{ asset('Image/team-member.jpg') }}" alt="Sarah Johnson" class="rounded-circle" width="100" height="100">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title mb-3">Sarah Johnson</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Operations Manager, XYZ Corporation</h6>
                        <p class="card-text">"The customer service at Tamco is top-notch. They always go above and beyond."</p>
                    </div>
                    <div class="star-rating mt-auto text-center">
                        &#9733; &#9733; &#9733; &#9733; &#9733;
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Sarah Johnson</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Operations Manager, XYZ Corporation</h6>
                        <p class="card-text">"The customer service at Tamco is top-notch. They always go above and beyond."</p>
                    </div>
                    <div class="star-rating mt-auto text-center">
                        &#9733; &#9733; &#9733; &#9733; &#9733;
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Sarah Johnson</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Operations Manager, XYZ Corporation</h6>
                        <p class="card-text">"The customer service at Tamco is top-notch. They always go above and beyond."</p>
                    </div>
                    <div class="star-rating mt-auto text-center">
                        &#9733; &#9733; &#9733; &#9733; &#9733;
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
</section>

 <!-- New Arrivals Section -->
 <section class="new-arrivals my-5">
    <h1 class="text-center mb-4">New Arrivals</h1>
    <p class="text-center">Get inspired with our collection of flavourful recipes</p>
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4"> <!-- Adjusted for responsive behavior -->
            <div class="col">
                <div class="card h-200">
                    <img src="{{ asset('Image/aaachi.jpg') }}" class="card-img-top" alt="Saffola Masala Oats">
                    <div class="card-body">
                        <h6 class="card-title">Saffola Masala Oats Veggie Twist 500g</h6>
                        <p class="card-text">$8</p>
                    </div>
                    <div class="d-flex mt-auto">
                        <input type="number" class="form-control me-2" placeholder="Quantity" style="width: 70px;">
                        <a href="{{url('Card')}}" class="btn btn-danger w-100">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-200">
                    <img src="{{ asset('Image/aaachi.jpg') }}" class="card-img-top" alt="Saffola Masala Oats">
                    <div class="card-body">
                        <h6 class="card-title">Saffola Masala Oats Veggie Twist 500g</h6>
                        <p class="card-text">$8</p>
                    </div>
                    <div class="d-flex mt-auto">
                        <input type="number" class="form-control me-2" placeholder="Quantity" style="width: 70px;">
                        <a href="{{url('Card')}}" class="btn btn-danger w-100">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-200">
                    <img src="{{ asset('Image/aaachi.jpg') }}" class="card-img-top" alt="Saffola Masala Oats">
                    <div class="card-body">
                        <h6 class="card-title">Saffola Masala Oats Veggie Twist 500g</h6>
                        <p class="card-text">$8</p>
                    </div>
                    <div class="d-flex mt-auto">
                        <input type="number" class="form-control me-2" placeholder="Quantity" style="width: 70px;">
                        <a href="{{url('Card')}}" class="btn btn-danger w-100">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-200">
                    <img src="{{ asset('Image/aaachi.jpg') }}" class="card-img-top" alt="Saffola Masala Oats">
                    <div class="card-body">
                        <h6 class="card-title">Saffola Masala Oats Veggie Twist 500g</h6>
                        <p class="card-text">$8</p>
                    </div>
                    <div class="d-flex mt-auto">
                        <input type="number" class="form-control me-2" placeholder="Quantity" style="width: 70px;">
                        <a href="{{url('Card')}}" class="btn btn-danger w-100">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-200">
                    <img src="{{ asset('Image/aaachi.jpg') }}" class="card-img-top" alt="Saffola Masala Oats">
                    <div class="card-body">
                        <h6 class="card-title">Saffola Masala Oats Veggie Twist 500g</h6>
                        <p class="card-text">$8</p>
                    </div>
                    <div class="d-flex mt-auto">
                        <input type="number" class="form-control me-2" placeholder="Quantity" style="width: 70px;">
                        <a href="{{url('Card')}}" class="btn btn-danger w-100">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-200">
                    <img src="{{ asset('Image/aaachi.jpg') }}" class="card-img-top" alt="Saffola Masala Oats">
                    <div class="card-body">
                        <h6 class="card-title">Saffola Masala Oats Veggie Twist 500g</h6>
                        <p class="card-text">$8</p>
                    </div>
                    <div class="d-flex mt-auto">
                        <input type="number" class="form-control me-2" placeholder="Quantity" style="width: 70px;">
                        <a href="{{url('Card')}}" class="btn btn-danger w-100">Add to Cart</a>
                    </div>
                </div>
            </div>

            <!-- Repeat similar columns for other cards -->
        </div>
    </div>
</section>
@endsection
