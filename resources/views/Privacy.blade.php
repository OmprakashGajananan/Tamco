@extends('layout.default')
@section('Title','Privacy')
@section('main-content')
<div class="heading">
    <h1>Protecting Your Privacy</h1>
    <p>At [Company], we take your privacy seriously and are committed to protecting your personal information.</p>
</div>
<div class="container-fluid">
    <div class="row">
        <!-- Table of Contents (Left Side) -->
        <nav class="col-md-3 col-sm-12 toc">
            <h5>Table of Contents</h5>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#heading2">Heading 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#heading3">Heading 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#heading4">Heading 4</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#heading5">Heading 5</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#heading6">Heading 6</a>
                </li>
            </ul>
        </nav>

        <!-- Content Section (Right Side) -->
        <main class="col-md-9 col-sm-12 content">
            <section id="heading2">
                <h2>Heading 2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse volutpat, sapien ac aliquam...</p>
            </section>

            <section id="heading3">
                <h2>Heading 3</h2>
                <p>Pellentesque scelerisque sem sit amet efficitur rutrum. Curabitur ac vehicula felis...</p>
            </section>

            <section id="heading4">
                <h2>Heading 4</h2>
                <img src="https://via.placeholder.com/600x300" alt="Privacy Image"> <!-- Replace with your image -->
                <p>Fusce interdum orci non metus fermentum interdum. Nulla vehicula arcu id enim aliquam, in...</p>
            </section>

            <section id="heading5">
                <h2>Heading 5</h2>
                <p>Aenean tortor nulla, pulvinar eget blandit vel, tincidunt vitae dolor. Vestibulum...</p>
            </section>

            <section id="heading6">
                <h2>Heading 6</h2>
                <p>Sed aliquam, metus eget consectetur tristique, lorem justo bibendum elit, et fermentum...</p>
            </section>
        </main>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
