@extends('layout.default')
@section('Title','New Arrival page')
@section('main-content')

<div class="banner-container">
    <img src="{{ asset('Image/offer.jpg') }}" alt="Banner Image" class="img-fluid">
</div>
<div class="container my-5">
    <div class="row">
        <!-- Sidebar for Product Categories -->
        <aside class="col-md-3 mb-4 sidebar">
            <h5>Product Categories</h5>
            <hr>

            <!-- Availability Filter -->
            <h6>Availability</h6>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="inStock" checked>
                <label class="form-check-label" for="inStock">
                    In Stock (400)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="outOfStock">
                <label class="form-check-label" for="outOfStock">
                    Out of Stock (70)
                </label>
            </div>

            <!-- Price Range Filter -->
            <h6 class="mt-4">Price Range: $0 - $100</h6>
            <input type="range" class="form-range" id="priceRange" min="0" max="100" step="1">
        </aside>

        <!-- Product Grid -->
        <section class="col-md-9">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                <!-- Single Product Card (Repeat this block for each product) -->
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
                            <a href="#" class="btn btn-danger w-100">Add to Cart</a>
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
                            <a href="#" class="btn btn-danger w-100">Add to Cart</a>
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
                            <a href="#" class="btn btn-danger w-100">Add to Cart</a>
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
                            <a href="#" class="btn btn-danger w-100">Add to Cart</a>
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
                            <a href="#" class="btn btn-danger w-100">Add to Cart</a>
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
                            <a href="#" class="btn btn-danger w-100">Add to Cart</a>
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
                            <a href="#" class="btn btn-danger w-100">Add to Cart</a>
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
                            <a href="#" class="btn btn-danger w-100">Add to Cart</a>
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
                            <a href="#" class="btn btn-danger w-100">Add to Cart</a>
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
                            <a href="#" class="btn btn-danger w-100">Add to Cart</a>
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
                            <a href="#" class="btn btn-danger w-100">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <!-- Add more product cards as necessary -->

            </div>
        </section>
    </div>
</div>
@endsection
