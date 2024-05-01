<header class="header" data-header>
    <div class="container">
        <a href="#" class="logo">
            <img src="{{ asset('xtaa.png') }}" alt="XtertyArch home" class="logo-light h-24">
            <img src="{{ asset('xtaa.png') }}" alt="XtertyArch home" class="logo-dark h-24">
        </a>

        <nav class="navbar" data-navbar>
            <div class="navbar-top">
                <a href="#" class="logo">
                    <img src="assets/images/logo-light.svg" width="74" height="24" alt="XtertyArch home">
                </a>

                <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                    <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
                </button>
            </div>

            <ul class="navbar-list">
                <li>
                    <a href="#" class="navbar-link">Home</a>
                </li>
                <li>
                    <a href="#" class="navbar-link">About</a>
                </li>

                <li>
                    <a href="#" class="navbar-link">Projects</a>
                </li>

                <li>
                    <a href="#" class="navbar-link">Blog</a>
                </li>

                <li>
                    <a href="#" class="navbar-link">Contact</a>
                </li>
            </ul>

            <div class="wrapper">
                <a href="mailto:info@email.com" class="contact-link">info@email.com</a>
                <a href="tel:001234567890" class="contact-link">00 (123) 456 78 90</a>
            </div>

            <ul class="social-list">
                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-dribbble"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-youtube"></ion-icon>
                    </a>
                </li>
            </ul>
        </nav>

        <a href="#" class="btn btn-primary">Free Trial</a>
        <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
            <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
        </button>

        <div class="overlay" data-nav-toggler data-overlay></div>
    </div>
</header>
