@extends('layout.default')
@section('Title','Blog')
@section('main-content')
    <!-- Header Section -->
    <div class="container mt-4">
        <h1 class="text-center">The Ultimate Guide to Grocery Shopping</h1>
        <div class="text-center text-muted">
            <p>by Jane Doe | September 18, 2024</p>
        </div>
    </div>

    <!-- Banner Section -->
    <div class="container-fluid">
        <img src="banner.jpg" class="img-fluid w-100" alt="Banner Image">
    </div>

    <!-- Content Section -->
    <div class="container mt-5">
        <div class="row">
            <!-- Main Content -->
            <div class="col-md-8">
                <h2>Introduction</h2>
                <p>Mi tincidunt elit, id quisque ligula ac diam, amet. Vel etiam suspendisse morbi eleifend faucibus eget vestibulum felis. Dictum quis montes, sit sit. Tellus aliquam enim urna, etiam. Mauris posuere vulputate arcu amet, vitae nisi, tellus tincidunt. At feugiat sapien varius id.
                    Eget quis mi enim, leo lacinia pharetra, semper. Eget in volutpat mollis at volutpat lectus velit, sed auctor. Porttitor fames arcu quis fusce augue enim. Quis at habitant diam at. Suscipit tristique risus, at donec. In turpis vel et quam imperdiet. Ipsum molestie aliquet sodales id est ac volutpat.
                </p>
                <img src="grocery-day.jpg" class="img-fluid mb-4" alt="Grocery Day">

                <p>Dolor enim eu tortor urna sed duis nulla. Aliquam vestibulum, nulla odio nisl vitae. In aliquet pellentesque aenean hac vestibulum turpis mi bibendum diam. Tempor integer aliquam in vitae malesuada fringill</p>
                <p>Elit nisi in eleifend sed nisi. Pulvinar at orci, proin imperdiet commodo consectetur convallis risus. Sed condimentum enim dignissim adipiscing faucibus consequat, urna. Viverra purus et erat auctor aliquam. Risus, volutpat vulputate posuere purus sit congue convallis aliquet. Arcu id augue ut feugiat donec porttitor neque. Mauris, neque ultricies eu vestibulum, bibendum quam lorem id. Dolor lacus, eget nunc lectus in tellus, pharetra, porttitor</p>
            </div>
            <!-- Sidebar -->
            <div class="col-md-4">
                <div class="newsletter-box">
                    <h3>Join Our Newsletter</h3>
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Enter your email">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Conclusion Section -->
    <div class="container mt-5 mb-5">
        <h2>Conclusion</h2>
        <p>Grocery shopping doesn't have to be a hassle. By planning ahead, choosing the right store...</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
