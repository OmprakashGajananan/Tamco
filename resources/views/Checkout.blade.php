@extends('layout.default')
@section('Title','Checkout')
@section('main-content')

    <div class="Checkout container">
        <h2 class="checkheading">Secure Checkout Process</h2>
        <p class="text-center mb-5">Review your order and proceed to payment for a seamless shopping experience.</p>

        <div class="row">
            <!-- Payment Method Section -->
            <div class="col-md-6 mb-4">
                <h4>Choose Your Preferred Payment Method</h4>
                <p>All transactions are safe and secure. We accept major credit cards and PayPal.</p>
                <div class="payment-methods d-flex">
                    <img src="visa.png" alt="Visa" class="img-fluid mr-3">
                    <img src="mastercard.png" alt="MasterCard" class="img-fluid mr-3">
                    <img src="paypal.png" alt="PayPal" class="img-fluid">
                </div>
            </div>

            <!-- Product Summary Section -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="{{ asset('Image/aaachi.jpg') }}" alt="Product" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">Product Name</h5>
                        <p>Price: $10.00</p>
                        <p>Quantity: 1</p>
                        <p>Total: $10.00</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <!-- Contact Information Section -->
                <div class="col-lg-7 mb-4">
                    <div class="p-3 border">
                        <h3>Contact Information</h3>
                        <p>Please Fill in Your Contact Information</p>
                        <form>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="firstName">First Name</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="First Name">
                                </div>
                                <div class="col-md-6">
                                    <label for="lastName">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="Last Name">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Email">
                                </div>
                                <div class="col-md-6">
                                    <label for="phoneNumber">Phone Number</label>
                                    <input type="tel" class="form-control" id="phoneNumber" placeholder="Phone Number">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="country">Select Country</label>
                                <select id="country" class="form-control">
                                    <option>Sri Lanka...</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" placeholder="Address">
                                </div>
                                <div class="col-md-6">
                                    <label for="city">City</label>
                                    <input type="text" class="form-control" id="city" placeholder="City">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="postcode">PostCode</label>
                                    <input type="text" class="form-control" id="postcode" placeholder="PostCode">
                                </div>
                                <div class="col-md-6">
                                    <label for="unit">Unit (optional)</label>
                                    <input type="text" class="form-control" id="unit" placeholder="Unit">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" rows="3" placeholder="Type your message..."></textarea>
                            </div>

                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="terms">
                                <label class="form-check-label" for="terms">I accept the Terms</label>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Payment Information Section -->
                <div class="col-lg-5 mb-4">
                    <div class="p-3 border">
                        <h3>Payment Information</h3>
                        <form>
                            <div class="mb-3">
                                <label for="cardHolder">Card Holder Name</label>
                                <input type="text" class="form-control" id="cardHolder" placeholder="Card Holder Name">
                            </div>
                            <div class="mb-3">
                                <label for="cardNumber">Card Number</label>
                                <input type="text" class="form-control" id="cardNumber" placeholder="Card Number">
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="expMonth">Exp Month</label>
                                    <input type="text" class="form-control" id="expMonth" placeholder="MM">
                                </div>
                                <div class="col-md-6">
                                    <label for="expYear">Exp Year</label>
                                    <input type="text" class="form-control" id="expYear" placeholder="YY">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="cvv">CVV</label>
                                <input type="text" class="form-control" id="cvv" placeholder="CVV">
                            </div>

                            <div class="mt-3">
                                <a href="#" class="btn btn-danger continue-shopping-btn d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="me-2" style="width: 24px; height: 24px;">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                    </svg>
                                    Continue Shopping
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
  @endsection
