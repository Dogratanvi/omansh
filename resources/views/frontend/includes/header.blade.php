<header>
        <div class="main_header">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <a class="navbar-brand" href="{{ route('frontend.index') }}">
                        <figure class="mb-0 img-fluid logo"><img src="{{ asset('img/logo.png') }}" alt="" ></figure>
                    </a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse d-flex justify-content-end navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('frontend.index') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('frontend.about') }}">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('frontend.service') }}">Services</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle dropdown-color navbar-text-color" href="#"
                                    id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"> Pages </a>
                                <div class="dropdown-menu drop-down-content">
                                    <ul class="list-unstyled drop-down-pages">
                                        <li class="nav-item">
                                            <a class="dropdown-item nav-link" href="./pricing.html">Pricing</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="dropdown-item nav-link" href="./faq.html">Faq</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./team.html">Team</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link"  href="{{ route('frontend.blog') }}"> Blog </a>
                            </li>
                            <li class="nav-item">
                                <a class=" contact_us" href="{{ route('frontend.contact') }}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>