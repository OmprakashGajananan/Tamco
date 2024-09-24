@extends('layout.default')
@section('Title','AddCard')
@section('main-content')
<section class="cart-container container">
    <!-- Centered Cart Header -->
    <h1 class="cart-header text-center ">Your Cart</h1>

    <!-- Cart Table -->
    <div class="row">
        <div class="col-lg-8">
            <table class="table table-bordered table-hover table-striped custom-table">
                <thead class="table-light">
                    <tr>
                        <th>Product List</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <img src="{{ asset('Image/aaachi.jpg') }}" alt="Product" class="product-img">
                            <span class="product-text">Saffola Masala Oats Veggie Twist 500g</span>
                        </td>
                        <td>
                            <div class="cart-quantity">
                                <input type="number" value="1" class="form-control">
                            </div>
                            <td>
                                <div class="amount-container">
                                    <h2>$8</h2>
                                    <a href="#" class=" delete-btn d-flex align-items-center justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                          </svg>
                                    </a>
                                </div>
                            </td>
                    </tr>
                </tbody>
            </table>

            <!-- Continue Shopping Button -->
            <div class="mt-3">
                <a href="#" class="btn btn-danger continue-shopping-btn d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="me-2" style="width: 24px; height: 24px;">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>
                    Continue Shopping
                </a>
            </div>
        </div>

        <!-- Cart Totals -->
        <div class="col-lg-4">
            <div class="cart-totals border p-3">
                <h4 class="mb-3">Cart Totals</h4>
                <p>Sub Totals: <span>$8.00</span></p>
                <div class="mb-3">
                    <label for="coupon" class="form-label">Coupon</label>
                    <input type="text" class="form-control" id="coupon" placeholder="Enter coupon code">
                </div>
                <p>Order Totals: <span>$8.00</span></p>
                <p>Please review your order carefully before proceeding to checkout.</p>
                <a href="{{url('Checkout')}}" class="btn btn-danger w-50">Checkout</a>
            </div>
        </div>
    </div>
</section>
@endsection
