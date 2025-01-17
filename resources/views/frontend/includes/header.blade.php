<header>
    <div class="main_header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a class="navbar-brand" href="{{ route('frontend.index') }}">
                    <figure class="mb-0 img-fluid logo"><img src="{{ asset('img/logo.png') }}" alt="logo"></figure>
                </a>

                <div class="collapse d-flex justify-content-end navbar-collapse d-none d-lg-block d-xl-block d-md-none d-sm-none d-xs-none"
                    id="navbarSupportedContent">
                    <ul class="navbar-nav ">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('frontend.index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('frontend.about') }}">About Us</a>
                        </li>
                        <li class="nav-item dropdown d-flex align-items-center">
                         
                                <a class="nav-link dropdown-toggle dropdown-color navbar-text-color" 
                                id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"> Services </a>

                            <div class="dropdown-menu drop-down-content" aria-labelledby="navbarDropdown">
                                <ul class="list-unstyled drop-down-pages">
                                <li class="nav-item">
                                        <a class="dropdown-item nav-link"
                                            href="{{ route('frontend.services.womenhealth') }}">
                                            Women Health</a>
                                            
                                    <li class="nav-item">
                                        <a class="dropdown-item nav-link"
                                            href="{{ route('frontend.services.physiotherapy') }}">
                                            Physiotherapy</a>
                                    </li>
                              
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item nav-link"
                                            href="{{ route('frontend.services.yoga') }}">Yoga</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{ route('frontend.blog.index') }}"> Blog </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle dropdown-color navbar-text-color" 
                                id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"> WORKSHOP </a>
                            <div class="dropdown-menu drop-down-content" aria-labelledby="navbarDropdown">
                                <ul class="list-unstyled drop-down-pages">
                                    <li class="nav-item">
                                        <a class="dropdown-item nav-link"
                                            href="{{ route('frontend.workshop.yoga-teacher-training') }}">
                                            YOGA TEACHER TRAINING</a>
                                    </li>
                             
                                    <li class="nav-item">
                                        <a class="dropdown-item nav-link"
                                            href="{{ route('frontend.workshop.corporatesessions') }}">CORPORATE
                                            SESSIONS</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle dropdown-color navbar-text-color"
                                id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"> Events </a>
                            <div class="dropdown-menu drop-down-content">
                                <ul class="list-unstyled drop-down-pages">
                                    <li class="nav-item">
                                        <a class="dropdown-item nav-link"
                                            href="{{ route('frontend.events.upcoming') }}">UPCOMING EVENTS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item nav-link"
                                            href="{{ route('frontend.events.past') }}">PAST EVENTS</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class=" contact_us" href="{{ route('frontend.contact.create') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>

                <button
                    class=" nav-btn  bg-transparent border-0 d-block d-lg-none d-xl-none d-md-block d-sm-block d-xs-block"
                    type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                    aria-controls="offcanvasRight"><i class="mobile fa-solid fa-bars"></i></button>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                    aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">

                        <button type="button" class="custom-close border-0 bg-transparent text-reset"
                            data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                    </div>
                    <div class="offcanvas-body p-0">
                        <ul class="navbar-nav pt-4 ">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('frontend.index') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('frontend.about') }}">About Us</a>
                            </li>
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle dropdown-color navbar-text-color" 
                                id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"> Services </a>

                                <div class="dropdown-menu drop-down-content" aria-labelledby="navbarDropdown">
                                    <ul class="list-unstyled drop-down-pages">
                                    <li class="nav-item">
                                            <a class="dropdown-item nav-link"
                                                href="{{ route('frontend.services.womenhealth') }}">
                                                Women Health</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="dropdown-item nav-link"
                                                href="{{ route('frontend.services.physiotherapy') }}">
                                                Physiotherapy</a>
                                        </li>
                         
                                        <li class="nav-item">
                                            <a class="dropdown-item nav-link"
                                                href="{{ route('frontend.services.yoga') }}">Yoga</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{ route('frontend.blog.index') }}"> Blog </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle dropdown-color navbar-text-color"
                                    id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"> WORKSHOP </a>
                                <div class="dropdown-menu drop-down-content" aria-labelledby="navbarDropdown">
                                    <ul class="list-unstyled drop-down-pages">
                                        <li class="nav-item">
                                            <a class="dropdown-item nav-link"
                                                href="{{ route('frontend.workshop.yoga-teacher-training') }}">
                                                Yoga TRAINING</a>
                                        </li>
                                
                                        <li class="nav-item">
                                            <a class="dropdown-item nav-link"
                                                href="{{ route('frontend.workshop.corporatesessions') }}">CORPORATE
                                                SESSIONS</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle dropdown-color navbar-text-color" 
                                    id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"> Events </a>
                                <div class="dropdown-menu drop-down-content">
                                    <ul class="list-unstyled drop-down-pages">
                                        <li class="nav-item">
                                            <a class="dropdown-item nav-link" href="{{ route('frontend.events.upcoming') }}">UPCOMING EVENTS</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="dropdown-item nav-link" href="{{ route('frontend.events.past') }}">PAST EVENTS</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class=" contact_us" href="{{ route('frontend.contact.create') }}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>