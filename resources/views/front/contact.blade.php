@extends('front.layouts.front')
@section('content')
<div class="contact-main-page mt-60 mb-40 mb-md-40 mb-sm-40 mb-xs-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 offset-lg-1 col-md-12 order-1 order-lg-2">
                <div class="contact-page-side-content">
                    <h3 class="contact-page-title">Contact Us</h3>
                    <p class="contact-page-message mb-25">
                        this is contact us form to help customers with their suggests and their issues either with product or company
                    </p>
                    <div class="single-contact-block">
                        <h4><i class="fa fa-fax"></i> Address</h4>
                        <p>Electronic Store Head Quarter In Kuwait</p>
                    </div>
                    <div class="single-contact-block">
                        <h4><i class="fa fa-phone"></i> Phone</h4>
                        <p>Mobile: (+965) ### ### ### </p>
                        <p>Hotline: (+965) ### ### ### </p>
                    </div>
                    <div class="single-contact-block last-child">
                        <h4><i class="fa fa-envelope-o"></i> Email</h4>
                        <p>support@electronicstore.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                <div class="contact-form-content pt-sm-55 pt-xs-55">
                    <h3 class="contact-page-title">Tell Us Your Message</h3>
                    <div class="contact-form">
                        <form  id="contact-form" action="/contact" method="post">
                            <div class="form-group">
                                <label>Your Name <span class="required">*</span></label>
                                <input type="text" name="customerName" id="customername" required>
                            </div>
                            <div class="form-group">
                                <label>Your Email <span class="required">*</span></label>
                                <input type="email" name="customerEmail" id="customerEmail" required>
                            </div>
                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" name="contactSubject" id="contactSubject">
                            </div>
                            <div class="form-group mb-30">
                                <label>Your Message</label>
                                <textarea name="contactMessage" id="contactMessage" ></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" value="submit" id="submit" class="li-btn-3" name="submit">send</button>
                            </div>
                        </form>
                    </div>
                    <p class="form-messege"></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
