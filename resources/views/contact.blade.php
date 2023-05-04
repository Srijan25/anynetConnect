@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Contact Us Page Design using Html CSS</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <section id="section-wrapper">
        <div class="box-wrapper">
            <div class="info-wrap">
                <h2 class="info-title">Contact Information</h2>
                <h3 class="info-sub-title">Fill up the form and our Team will get back to you within 24 hours</h3>
                <ul class="info-details">
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <span>Phone:</span> <a href="tel:+91 7489581850">+91 7489581850</a>
                    </li>
                    <li>
                        <i class="fas fa-paper-plane"></i>
                        <span>Email:</span> <a href="mailto:srijanksah02@gmail.com">srijanksah02@gmail.com</a>
                    </li>
                    <li>
                        <i class="fas fa-globe"></i>
                        <span>Instagram:</span> <a href="https://www.instagram.com/srijan__2002/">Srijan__2002</a>
                    </li>
                </ul>
                <ul class="social-icons">
                    <li><a href="https://www.facebook.com/profile.php?id=100019009743092"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/SRIJANKUMARSAH4"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/srijan-kumar-sah-1a276417b/"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
            <div class="form-wrap">
                <form action="#" method="POST">
                    <h2 class="form-title">Send us a message</h2>
                    <div class="form-fields">
                        <div class="form-group">
                            <input type="text" class="fname" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="lname" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="email" placeholder="Mail">
                        </div>
                        <div class="form-group">
                            <input type="number" class="phone" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="" placeholder="Write your message"></textarea>
                        </div>
                    </div>
                    <input type="submit" value="Send Message" class="submit-button">
                </form>
            </div>
        </div>
    </section>
    
</body>
</html>
@endsection