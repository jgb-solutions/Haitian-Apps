@extends('layouts.app')

@section('content')
<section id="contact" class="section no-mb pt_30 pb_30">
    <div class="container">
        <div class="row">
            <div class="col m6 s12">
                <h2>{{$title}}</h2>
                <p class="grey-text">
                    Wanna hire <a href="https://jgb.solutions" target="_blank">JGB Solutions</a> for your next project or just say hi? <br>
                    <i class="fa fa-envelope"></i> Drop us a line at
                    <a href="mailto:services@jgb.solutions">services@jgb.solutions</a>,<br>
                    <i class="fa fa-phone"></i> Call us directly at <a href="tel:+50941830318">(509) 4183 0318</a>, <br>
                    Or just use the form. It's that easy. ;)
                </p>
            </div>
            <div class="col m6 s12">
                <form action="/thank-you.html" netlify name="Contact_Me">
                    <div class="input-field">
                        <input name="full_name" placeholder="Enter Your Full Name" id="full_name" type="text" class="validate" required>
                        <label for="full_name">Full Name</label>
                        <span class="helper-text" data-error="Your full name is required"></span>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="email" placeholder="Enter Your E-mail" id="email" type="email" class="validate" required="">
                            <label for="email">E-mail</label>
                            <span class="helper-text" data-error="Your entered a wrong e-mail."></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="subject" placeholder="Enter The Subject of Your Message" id="subject" type="text" class="validate" required>
                            <label for="subject">Subject</label>
                            <span class="helper-text" data-error="The subject is required."></span>
                        </div>
                    </div>
                    <div class="input-field">
                        <textarea name="message" placeholder="Enter Your Message" id="message" class="materialize-textarea" required></textarea>
                        <label for="message">Message</label>
                        <span class="helper-text" data-error="Your message is required."></span>
                    </div>
                    <div class="input-field">
                        <button class="btn blue btn-large waves-effect waves-light" type="submit">
                            <i class="material-icons right">send</i> Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
