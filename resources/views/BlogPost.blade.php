@extends('layout.default')
@section('Title','Checkout')
@section('main-content')
    <!-- Header Section -->
    <div class="container text-center mt-4">
        <h1>Discover Delicious Recipes Here</h1>
        <p>Explore our collection of recipes to find your next favorite dish.</p>
    </div>

    <!-- Recipe Grid Section -->
    <div class="container mt-5">
        <div class="row">
            <!-- Recipe Cards -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="recipe1.jpg" class="card-img-top" alt="Recipe 1">
                    <div class="card-body">
                        <h5 class="card-title">Recipe 1</h5>
                        <p class="card-text">A short description of the recipe.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="recipe2.jpg" class="card-img-top" alt="Recipe 2">
                    <div class="card-body">
                        <h5 class="card-title">Recipe 2</h5>
                        <p class="card-text">A short description of the recipe.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('Image/aaachi.jpg') }}" class="card-img-top" alt="Recipe 3">
                    <div class="card-body">
                        <h5 class="card-title">Recipe 3</h5>
                        <p class="card-text">A short description of the recipe.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Recipes Section -->
    <div class="container mt-5">
        <h2>Delicious Recipes for Everyone</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="recipe1.jpg" class="card-img-top" alt="Recipe 1">
                    <div class="card-body">
                        <h5 class="card-title">Recipe 1</h5>
                        <p class="card-text">A short description of the recipe.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="recipe2.jpg" class="card-img-top" alt="Recipe 2">
                    <div class="card-body">
                        <h5 class="card-title">Recipe 2</h5>
                        <p class="card-text">A short description of the recipe.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="recipe3.jpg" class="card-img-top" alt="Recipe 3">
                    <div class="card-body">
                        <h5 class="card-title">Recipe 3</h5>
                        <p class="card-text">A short description of the recipe.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <!-- Featured Section -->
    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2>Discover Delicious Recipes to Spice Up Your Kitchen</h2>
                <p>Explore our blog for culinary inspiration, cooking tips, and mouth-watering recipes that will impress your family and friends. From quick weeknight dinners to decadent desserts, we've got you covered.</p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('Image/aaachi.jpg') }}" class="img-fluid" alt="Cooking">
            </div>
        </div>
    </div>

  <!-- Call-to-Action Section -->
  <div class="container mt-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h2>Stay Updated with Our Blog</h2>
            <p>Get the latest news, tips, and recipes!</p>
        </div>
        <div class="col-md-6 text-center">
            <button class="btn btn-primary mr-8">Subscribe</button>
            <button class="btn btn-secondary">Learn More</button>
        </div>
    </div>
</div>



<!-- Newsletter Section -->
<div class="container mt-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h2>Stay Updated with Our Blog</h2>
            <p>Subscribe to our newsletter for the latest blog updates and exclusive content.</p>
            <form>
                <div class="input-group"> <!-- Create an input group -->
                    <input type="email" class="form-control" placeholder="Enter your email">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('Image/aaachi.jpg') }}" class="img-fluid" alt="Newsletter">
        </div>
    </div>
</div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
