@section('Title', 'Signup')
@section('main-content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{url('Css/styles.css')}}">
<link rel="icon" href="{{ asset('Image/market.jpg') }}" type="image/jpg">

<div class="d-flex flex-column justify-content-center align-items-center vh-100">
    <div class="tamco">
        <h1>Tamco</h1> 
    </div>
    <div class="Usercard p-5 mt-4">
        <div class="d-flex justify-content-between mb-4">
            <a href="{{url('Register')}}" class="btn btn-success w-50">Register </a>
            <a href="{{url('Login')}}" class="btn btn-secondary w-50">Login</a>
        </div>

        <form class="mt-4">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password">
            </div>
            <div class="mb-3 d-flex align-items-center">
                <input type="checkbox" id="remember" class="me-2">
                <label for="remember" class="form-label mb-0">Remember me</label>
            </div>
            <button type="submit" class="btn btn-success w-100">Register</button>
            <a href="#" class="d-block text-center mt-3">Forgot password?</a>
        </form>
    </div>
</div>
@show
