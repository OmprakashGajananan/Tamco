@extends('layout.default')
@section('Title','About')
@section('main-content')
<div class="container-About">
    <div class="image">
        <img src="{{ asset('Image/ashirvaad.jpg') }}" alt="Ashirvaad Image">
    </div>
    <div class="contents">
        <h5>Quality</h5>
        <h1>Our Story: Bringing Fresh Groceries to Your Doorstep</h1>
        <p>Tamco is an online grocery store dedicated to providing fresh and high-quality groceries right to your doorstep. Our mission is to make grocery shopping convenient and hassle-free, allowing you to spend more time doing the things you love. With a wide selection of products, competitive prices, and reliable delivery, we strive to exceed your expectations every step of the way. Join us today and experience the Tamco difference!</p>
        <div class="btn-container">
            <a href="#" class="btn btn-primary">Learn More</a>
            <a href="#" class="btn btn-primary">Signup</a>
        </div>
    </div>
</div>
<section class="people my-5">
    <h5 class="text-center mb-4">Experienced</h5>
    <h1 class="text-center mb-4">Meet Our Team</h1>
    <p class="text-center">Get to know the talented individuals behind Tamco.</p>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3"> <!-- Reduced gap size -->
            <div class="col">
                <div class="card h-100 pt-3">
                    <img src="{{ asset('Image/aaachi.jpg') }}" class="card-img-top" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('Image/aaachi.jpg') }}" class="card-img-top" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('Image/aaachi.jpg') }}" class="card-img-top" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('Image/aaachi.jpg') }}" class="card-img-top" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('Image/aaachi.jpg') }}" class="card-img-top" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('Image/aaachi.jpg') }}" class="card-img-top" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('Image/aaachi.jpg') }}" class="card-img-top" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="hiring text-center mt-5">
        <h1 class="font-bold">We’re hiring!</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <a href="#" class="btn btn-outline-dark mt-3 mt-lg-0 ms-lg-3">Open positions</a>
    </div>
    <h4 class="text-center my-5">Trusted by top brands for their everyday needs</h4>
    <div class="row justify-content-center text-center">
        <div class="col-auto"><img src="amul.png" alt="Amul" class="brand-logo"></div>
        <div class="col-auto"><img src="aachi.png" alt="Aachi" class="brand-logo"></div>
        <div class="col-auto"><img src="astra.png" alt="Astra" class="brand-logo"></div>
        <div class="col-auto"><img src="kroger.png" alt="Kroger" class="brand-logo"></div>
        <div class="col-auto"><img src="taj.png" alt="Taj" class="brand-logo"></div>
    </div>

<!-- Testimonial Section -->
<section class="testimonials my-5">
    <h2 class="text-center mb-4">Customer Testimonials</h2>
    <p class="text-center mb-4">Read what our customers have to say about us</p>
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
    </section>
</section>



@endsection
