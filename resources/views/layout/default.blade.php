<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('Title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{url('Css/styles.css')}}">
    <link rel="icon" href="{{ asset('Image/market.jpg') }}" type="image/jpg">
</head>
<body>
    <!-- Header -->
    @include('layout.includes.header')

    @section('main-content')

    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('Image/market.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>Fresh Market Deals</h5>
                    <p>Enjoy the best quality at the best prices!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('Image/market2.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>Organic Selections</h5>
                    <p>Handpicked organic products delivered to your door.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('Image/market3.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>Seasonal Favorites</h5>
                    <p>Discover what's fresh and in season.</p>
                </div>
            </div>
        </div>
         <!-- Control buttons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>

    <br>

    <!-- New Arrivals Section -->
 <section class="new-arrivals my-5">
    <h1 class="text-center mb-4">New Arrivals</h1>
    <p class="text-center">Get inspired with our collection of flavourful recipes</p>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-5 g-4"> <!-- Added g-4 for gap -->
            <div class="col">
                <div class="card h-100 d-flex flex-column">
                    <img src="{{ asset('Image/aaachi.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Card title</h5>
                        <div class="d-flex mt-auto">
                            <input type="number" class="form-control me-2" placeholder="Quantity" style="width: 70px;">
                            <a href="#" class="btn btn-danger w-100">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 d-flex flex-column">
                    <img src="{{ asset('Image/aaachi.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Card title</h5>
                        <div class="d-flex mt-auto">
                            <input type="number" class="form-control me-2" placeholder="Quantity" style="width: 70px;">
                            <a href="#" class="btn btn-danger w-100">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 d-flex flex-column">
                    <img src="{{ asset('Image/aaachi.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Card title</h5>
                        <div class="d-flex mt-auto">
                            <input type="number" class="form-control me-2" placeholder="Quantity" style="width: 70px;">
                            <a href="#" class="btn btn-danger w-100">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 d-flex flex-column">
                    <img src="{{ asset('Image/aaachi.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Card title</h5>
                        <div class="d-flex mt-auto">
                            <input type="number" class="form-control me-2" placeholder="Quantity" style="width: 70px;">
                            <a href="#" class="btn btn-danger w-100">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 d-flex flex-column">
                    <img src="{{ asset('Image/aaachi.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Card title</h5>
                        <div class="d-flex mt-auto">
                            <input type="number" class="form-control me-2" placeholder="Quantity" style="width: 70px;">
                            <a href="#" class="btn btn-danger w-100">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 d-flex flex-column">
                    <img src="{{ asset('Image/aaachi.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Card title</h5>
                        <div class="d-flex mt-auto">
                            <input type="number" class="form-control me-2" placeholder="Quantity" style="width: 70px;">
                            <a href="#" class="btn btn-danger w-100">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 d-flex flex-column">
                    <img src="{{ asset('Image/aaachi.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Card title</h5>
                        <div class="d-flex mt-auto">
                            <input type="number" class="form-control me-2" placeholder="Quantity" style="width: 70px;">
                            <a href="#" class="btn btn-danger w-100">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <div class="mt-3">
        <a href="#" class="next">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" class="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </a>
    </div>


    <!-- Special Arrivals Section (similar to the above) -->
    <section class="new-arrivals my-5">
        <h1 class="text-center mb-4">Special Arrivals </h1>
        <p class="text-center">Get inspired with our collection of flavourful recipes</p>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-5 g-4"> <!-- Added g-4 for gap -->
                <div class="col">
                    <div class="card h-100 d-flex flex-column">
                        <img src="{{ asset('Image/aaachi.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Card title</h5>
                            <div class="d-flex mt-auto">
                                <input type="number" class="form-control me-2" placeholder="Quantity" style="width: 70px;">
                                <a href="#" class="btn btn-danger w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 d-flex flex-column">
                        <img src="{{ asset('Image/aaachi.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Card title</h5>
                            <div class="d-flex mt-auto">
                                <input type="number" class="form-control me-2" placeholder="Quantity" style="width: 70px;">
                                <a href="#" class="btn btn-danger w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 d-flex flex-column">
                        <img src="{{ asset('Image/aaachi.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Card title</h5>
                            <div class="d-flex mt-auto">
                                <input type="number" class="form-control me-2" placeholder="Quantity" style="width: 70px;">
                                <a href="#" class="btn btn-danger w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 d-flex flex-column">
                        <img src="{{ asset('Image/aaachi.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Card title</h5>
                            <div class="d-flex mt-auto">
                                <input type="number" class="form-control me-2" placeholder="Quantity" style="width: 70px;">
                                <a href="#" class="btn btn-danger w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 d-flex flex-column">
                        <img src="{{ asset('Image/aaachi.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Card title</h5>
                            <div class="d-flex mt-auto">
                                <input type="number" class="form-control me-2" placeholder="Quantity" style="width: 70px;">
                                <a href="#" class="btn btn-danger w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 d-flex flex-column">
                        <img src="{{ asset('Image/aaachi.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Card title</h5>
                            <div class="d-flex mt-auto">
                                <input type="number" class="form-control me-2" placeholder="Quantity" style="width: 70px;">
                                <a href="#" class="btn btn-danger w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 d-flex flex-column">
                        <img src="{{ asset('Image/aaachi.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Card title</h5>
                            <div class="d-flex mt-auto">
                                <input type="number" class="form-control me-2" placeholder="Quantity" style="width: 70px;">
                                <a href="#" class="btn btn-danger w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="banner-container">
        <img src="{{ asset('Image/offer.jpg') }}" alt="Banner Image" class="img-fluid">
    </div>


    <!-- Testimonial Section -->
<!-- Testimonial Section -->
<section class="testimonials my-5">
    <h2 class="text-center mb-4">What Our Customers Say</h2>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4"> <!-- Adjusted for responsive behavior -->
            <div class="col-md-4">
                <div class="card p-3 h-100 text-center">
                    <!-- Add Image inside a circular frame -->
                    <div class="img-container mb-3">
                        <img src="{{ asset('Image/person2.jpg') }}" alt="Sarah Johnson" class="rounded-circle" width="100" height="100">
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
                <div class="card p-3 h-100 text-center">
                    <!-- Add Image inside a circular frame -->
                    <div class="img-container mb-3">
                        <img src="{{ asset('Image/person2.jpg') }}" alt="Sarah Johnson" class="rounded-circle" width="100" height="100">
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
                <div class="card p-3 h-100 text-center">
                    <!-- Add Image inside a circular frame -->
                    <div class="img-container mb-3">
                        <img src="{{ asset('Image/person2.jpg') }}" alt="Sarah Johnson" class="rounded-circle" width="100" height="100">
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
                <div class="card p-3 h-100 text-center">
                    <!-- Add Image inside a circular frame -->
                    <div class="img-container mb-3">
                        <img src="{{ asset('Image/person2.jpg') }}" alt="Sarah Johnson" class="rounded-circle" width="100" height="100">
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
        </div>
    </div>
    <h4 class="text-center my-5">Trusted by top brands for their everyday needs</h4>
    <div class="row justify-content-center text-center">
        <div class="col-auto"><img src="amul.png" alt="Amul" class="brand-logo"></div>
        <div class="col-auto"><img src="aachi.png" alt="Aachi" class="brand-logo"></div>
        <div class="col-auto"><img src="astra.png" alt="Astra" class="brand-logo"></div>
        <div class="col-auto"><img src="kroger.png" alt="Kroger" class="brand-logo"></div>
        <div class="col-auto"><img src="taj.png" alt="Taj" class="brand-logo"></div>
    </div>
</section>



    @show

    <!-- Footer -->
    @include('layout.includes.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
