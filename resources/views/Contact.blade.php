@extends('layout.default')
@section('Title','Contact')
@section('main-content')

<!-- Contact Us Section -->
<div class="Contact container pt-3">
    <div class="row">
        <div class="col-md-8 my-8">
            <h2>Contact Us Today</h2>

        </div>
        <div class="col-md-4 text-center p-6">
            <p>Have a question or need assistance? Our friendly support team is here to help.</p>
            <button class="btn btn-Learnmore">Learn more</button>
            <button class="btn btn-contact">Contact</button>
        </div>
    </div>
</div>

<div class="Information container my-5">
    <div class="row">
        <div class="col-md-8">
            <h2>Contact Information</h2>
            <p>If you prefer to email us, please complete the form below:</p>
        </div>
        <div class="col-md-4 text-left">
            <ul class="list-unstyled">
                <li><i class="fas fa-envelope"></i> Email: example@example.com</li>
                <li><i class="fas fa-phone"></i> Phone: (123) 456-7890</li>
                <li><i class="fas fa-map-marker-alt"></i> Address: 123 Example St, City, Country</li>
            </ul>
        </div>
    </div>
</div>

<!-- Map Image Section -->
<div class="image container my-5">
    <img src="contact.jpg" alt="Map Location" class="img-fluid">
</div>

<!-- Get in Touch Form Section -->
<div class="getintouch container my-5">
    <h2 class="text-center">Get in Touch</h2>
    <form>
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" class="form-control" id="phone" placeholder="Phone Number">
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="form-check">
                    <input type="radio" name="inquiryType" id="generalInquiry" class="form-check-input">
                    <label for="generalInquiry" class="form-check-label">General Inquiry</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="inquiryType" id="productSupport" class="form-check-input">
                    <label for="productSupport" class="form-check-label">Product Support</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="inquiryType" id="orderAssistance" class="form-check-input">
                    <label for="orderAssistance" class="form-check-label">Order Assistance</label>
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="form-check">
                    <input type="radio" name="inquiryType" id="billingInquiry" class="form-check-input">
                    <label for="billingInquiry" class="form-check-label">Billing Inquiry</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="inquiryType" id="feedback" class="form-check-input">
                    <label for="feedback" class="form-check-label">Feedback</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="inquiryType" id="other" class="form-check-input">
                    <label for="other" class="form-check-label">Other</label>
                </div>
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" rows="4" placeholder="Your Message"></textarea>
        </div>

        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="terms">
            <label class="form-check-label" for="terms">
                I accept the Terms
            </label>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>


@endsection
