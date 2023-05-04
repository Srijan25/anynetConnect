<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Anynet</title>
    </head>
    <body>
        <!--=============== HEADER ===============-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="{{ url('/') }}" class="nav__logo">
                    <img src="assets/img/logo.png" alt="">
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="{{ url('/') }}" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ url('/') }}" class="nav__link">Intro</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('chats') }}" class="nav__link">Connect</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('tech') }}" class="nav__link">Tech</a>
                        </li>
                        {{-- <li class="nav__item"> --}}
                            @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            {{-- <li class="nav-item dropdown"> --}}
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                {{-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"> --}}
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        </li>
                        
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class="ri-close-line"></i>
                    </div>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-function-line"></i>
                </div>
            </nav>
        </header>

        

        <!--=============== FOOTER ===============-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <a href="#" class="footer__logo">
                    <img src="assets/img/logo.png" alt="">
                </a>
    
                <div class="footer__content">
                    <h3 class="footer__title">About-us</h3>
    
                    <ul class="footer__links">
                        <li>
                            <a href="{{ url('/') }}" class="footer__link">Home</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Content</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}" class="footer__link">About us</a>
                        </li>
                        <li>
                            <a href="https://goo.gl/maps/ogEGFkt3LaZ6fKnL7" class="footer__link">Location</a>
                        </li>
                    </ul>
                </div>
    
                <div class="footer__content">
                    <h3 class="footer__title">Support</h3>
    
                    <ul class="footer__links">
                        <li>
                            Connect with Technology
                        </li>
                        <li>
                            <a href="{{ route('register') }}" class="footer__link">Register</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}" class="footer__link">Send message</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}" class="footer__link">Contact-us</a>
                        </li>
                    </ul>
                </div>
    
                <div class="footer__content">
                    {{-- <form action="" class="footer__form">
                        <input type="email" placeholder="Email" class="footer__input">
                        <button class="button button--flex">
                            <i class="ri-send-plane-line button__icon"></i> Subscribe
                        </button>
                    </form> --}}
    
                    <div class="footer__social">
                        <a href="https://www.facebook.com/profile.php?id=100019009743092" target="_blank" class="footer__social-link">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/srijan__2002/" target="_blank" class="footer__social-link">
                            <i class="ri-instagram-line"></i>
                        </a>
                        <a href="https://twitter.com/SRIJANKUMARSAH4" target="_blank" class="footer__social-link">
                            <i class="ri-twitter-line"></i>
                        </a>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3560.940680435981!2d75.86024531555111!3d26.810017370956594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396dc832568c7fad%3A0xede86f1902a9ce10!2sSuresh%20Gyan%20Vihar%20University!5e0!3m2!1sen!2sin!4v1670674828273!5m2!1sen!2sin" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <p class="footer__copy">
                <a href="https://www.youtube.com/" target="_blank" class="footer__copy-link">Srijan </a>
                <a href="mailto:srijanksah02@gmail.com">srijanksah02@gmail.com</a>
            </p>

        </footer>

        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-s-line scrollup__icon"></i>
        </a>
        
        <!--=============== SCROLL REVEAL ===============-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    </body>
</html>