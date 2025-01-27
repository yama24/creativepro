@extends('f._layout')
@section('meta')
    <!-- HTML Meta Tags -->
    <title>{{ $title }} - Human∞.id</title>
    <meta name="description"
        content="Everything can be learned except for something I don't want to learn. Give me space, time and internet access so I can be anything.">

    <meta name="keywords"
        content="HTML, CSS, JavaScript, PHP, MySQL, Laravel, Codeigniter, Ubuntu, Linux, jQuery, Bootstrap, NodeJS">
    <meta name="author" content="Yayan Maulana">


    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="{{ $title }} - Human∞.id">
    <meta itemprop="description"
        content="Everything can be learned except for something I don't want to learn. Give me space, time and internet access so I can be anything.">
    <meta itemprop="image" content="{{ asset('f/images/yama/yama.jpeg') }}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $title }} - Human∞.id">
    <meta property="og:description"
        content="Everything can be learned except for something I don't want to learn. Give me space, time and internet access so I can be anything.">
    <meta property="og:image" content="{{ asset('f/images/yama/yama.jpeg') }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title }} - Human∞.id">
    <meta name="twitter:description"
        content="Everything can be learned except for something I don't want to learn. Give me space, time and internet access so I can be anything.">
    <meta name="twitter:image" content="{{ asset('f/images/yama/yama.jpeg') }}">

    <!-- Meta Tags Generated via http://heymeta.com -->
@endsection

@section('css')
    <style>
        body.dark {
            background: var(--primary-color) !important;
        }

        .desktop-header-3 {
            background: #f9f9ff !important;
            width: 100%;
            margin-top: 0;
        }

        body.dark .desktop-header-3 {
            background: #0B0E1C !important;
        }

        .desktop-header-3 .container-fluid {
            width: 80%;
            margin: auto;
        }
    </style>
@endsection
@section('content')
    <!-- section home -->
    <section id="home" class="home d-flex align-items-center light">
        <div class="container">

            <!-- intro -->
            <div class="intro">
                <!-- avatar image -->
                <img class="img-fluid rounded-circle mb-4" src="{{ asset('f/images/yama/yama.jpeg') }}" alt="Yama"
                    width="108px">

                <!-- info -->
                <h1 class="mb-2 mt-0">Yayan Maulana (Yama)</h1>
                <span>I'm a <span class="text-rotating">Fast Learner, Back-end developer, Front-end developer, PHP
                        programmer, Javascript programmer, MySQL programmer, Linux user</span></span>

                <!-- social icons -->
                <ul class="social-icons light list-inline mb-0 mt-4">
                    <li class="list-inline-item"><a target="_blank" href="https://www.instagram.com/abuyama24/"><i
                                class="fab fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a target="_blank" href="https://www.facebook.com/abuyama24"><i
                                class="fab fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a target="_blank" href="https://www.linkedin.com/in/abuyama/"><i
                                class="fab fa-linkedin"></i></a>
                    </li>
                    <li class="list-inline-item"><a target="_blank" href="https://github.com/yama24"><i
                                class="fab fa-github"></i></a></li>
                    <li class="list-inline-item"><a target="_blank" href="https://t.me/yama24"><i
                                class="fab fa-telegram"></i></a></li>
                </ul>

                <!-- buttons -->
                <div class="mt-4">
                    <a href="https://wa.me/628986182128" class="btn btn-default">Contact me</a>
                </div>
            </div>

            <!-- scroll down mouse wheel -->
            <div class="scroll-down light">
                <a href="#about" class="mouse-wrapper">
                    <span>Scroll Down</span>
                    <span class="mouse">
                        <span class="wheel"></span>
                    </span>
                </a>
            </div>

            <!-- parallax layers -->
            <div class="parallax" data-relative-input="true">

                <svg width="27" height="29" data-depth="0.3" class="layer p1" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M21.15625.60099c4.37954 3.67487 6.46544 9.40612 5.47254 15.03526-.9929 5.62915-4.91339 10.30141-10.2846 12.25672-5.37122 1.9553-11.3776.89631-15.75715-2.77856l2.05692-2.45134c3.50315 2.93948 8.3087 3.78663 12.60572 2.22284 4.297-1.5638 7.43381-5.30209 8.22768-9.80537.79387-4.50328-.8749-9.08872-4.37803-12.02821L21.15625.60099z"
                        fill="#FFD15C" fill-rule="evenodd" />
                </svg>

                <svg width="26" height="26" data-depth="0.2" class="layer p2" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 3.3541L2.42705 24.5h21.1459L13 3.3541z" stroke="#FF4C60" stroke-width="3" fill="none"
                        fill-rule="evenodd" />
                </svg>

                <svg width="30" height="25" data-depth="0.3" class="layer p3" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M.1436 8.9282C3.00213 3.97706 8.2841.92763 14.00013.92796c5.71605.00032 10.9981 3.04992 13.85641 8 2.8583 4.95007 2.8584 11.0491-.00014 16.00024l-2.77128-1.6c2.28651-3.96036 2.28631-8.84002.00011-12.8002-2.2862-3.96017-6.5124-6.40017-11.08513-6.4-4.57271.00018-8.79872 2.43984-11.08524 6.4002l-2.77128-1.6z"
                        fill="#44D7B6" fill-rule="evenodd" />
                </svg>

                <svg width="15" height="23" data-depth="0.6" class="layer p4" xmlns="http://www.w3.org/2000/svg">
                    <rect transform="rotate(30 9.86603 10.13397)" x="7" width="3" height="25"
                        rx="1.5" fill="#FFD15C" fill-rule="evenodd" />
                </svg>

                <svg width="15" height="23" data-depth="0.2" class="layer p5"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect transform="rotate(30 9.86603 10.13397)" x="7" width="3" height="25"
                        rx="1.5" fill="#6C6CE5" fill-rule="evenodd" />
                </svg>

                <svg width="49" height="17" data-depth="0.5" class="layer p6"
                    xmlns="http://www.w3.org/2000/svg">
                    <g fill="#FF4C60" fill-rule="evenodd">
                        <path
                            d="M.5 16.5c0-5.71709 2.3825-10.99895 6.25-13.8567 3.8675-2.85774 8.6325-2.85774 12.5 0C23.1175 5.50106 25.5 10.78292 25.5 16.5H23c0-4.57303-1.90625-8.79884-5-11.08535-3.09375-2.28652-6.90625-2.28652-10 0C4.90625 7.70116 3 11.92697 3 16.5H.5z" />
                        <path
                            d="M23.5 16.5c0-5.71709 2.3825-10.99895 6.25-13.8567 3.8675-2.85774 8.6325-2.85774 12.5 0C46.1175 5.50106 48.5 10.78292 48.5 16.5H46c0-4.57303-1.90625-8.79884-5-11.08535-3.09375-2.28652-6.90625-2.28652-10 0-3.09375 2.28651-5 6.51232-5 11.08535h-2.5z" />
                    </g>
                </svg>

                <svg width="26" height="26" data-depth="0.4" class="layer p7"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 22.6459L2.42705 1.5h21.1459L13 22.6459z" stroke="#FFD15C" stroke-width="3"
                        fill="none" fill-rule="evenodd" />
                </svg>

                <svg width="19" height="21" data-depth="0.3" class="layer p8"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect transform="rotate(-40 6.25252 10.12626)" x="7" width="3" height="25"
                        rx="1.5" fill="#6C6CE5" fill-rule="evenodd" />
                </svg>

                <svg width="30" height="25" data-depth="0.3" data-depth-y="-1.30" class="layer p9"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M29.8564 16.0718c-2.85854 4.95114-8.1405 8.00057-13.85654 8.00024-5.71605-.00032-10.9981-3.04992-13.85641-8-2.8583-4.95007-2.8584-11.0491.00014-16.00024l2.77128 1.6c-2.28651 3.96036-2.28631 8.84002-.00011 12.8002 2.2862 3.96017 6.5124 6.40017 11.08513 6.4 4.57271-.00018 8.79872-2.43984 11.08524-6.4002l2.77128 1.6z"
                        fill="#6C6CE5" fill-rule="evenodd" />
                </svg>

                <svg width="47" height="29" data-depth="0.2" class="layer p10"
                    xmlns="http://www.w3.org/2000/svg">
                    <g fill="#44D7B6" fill-rule="evenodd">
                        <path
                            d="M46.78878 17.19094c-1.95535 5.3723-6.00068 9.52077-10.61234 10.8834-4.61167 1.36265-9.0893-.26708-11.74616-4.27524-2.65686-4.00817-3.08917-9.78636-1.13381-15.15866l2.34923.85505c-1.56407 4.29724-1.2181 8.92018.90705 12.12693 2.12514 3.20674 5.70772 4.5107 9.39692 3.4202 3.68921-1.0905 6.92581-4.40949 8.48988-8.70673l2.34923.85505z" />
                        <path
                            d="M25.17585 9.32448c-1.95535 5.3723-6.00068 9.52077-10.61234 10.8834-4.61167 1.36264-9.0893-.26708-11.74616-4.27525C.16049 11.92447-.27182 6.14628 1.68354.77398l2.34923.85505c-1.56407 4.29724-1.2181 8.92018.90705 12.12692 2.12514 3.20675 5.70772 4.5107 9.39692 3.4202 3.68921-1.0905 6.92581-4.40948 8.48988-8.70672l2.34923.85505z" />
                    </g>
                </svg>

                <svg width="33" height="20" data-depth="0.5" class="layer p11"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M32.36774.34317c.99276 5.63023-1.09332 11.3614-5.47227 15.03536-4.37895 3.67396-10.3855 4.73307-15.75693 2.77837C5.76711 16.2022 1.84665 11.53014.8539 5.8999l3.15139-.55567c.7941 4.50356 3.93083 8.24147 8.22772 9.8056 4.29688 1.56413 9.10275.71673 12.60554-2.2227C28.34133 9.98771 30.01045 5.4024 29.21635.89884l3.15139-.55567z"
                        fill="#FFD15C" fill-rule="evenodd" />
                </svg>

            </div>
        </div>

    </section>

    <!-- section about -->
    <section id="about">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">About Me</h2>

            <div class="spacer" data-height="60"></div>

            <div class="row">

                <div class="col-md-3">
                    <div class="text-center text-md-left">
                        <!-- avatar image -->
                        <img class="img-fluid rounded-circle" src="{{ asset('f/images/yama/yama2.jpg') }}" alt="Yama"
                            width="150px">
                    </div>
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                </div>

                <div class="col-md-9 triangle-left-md triangle-top-sm">
                    <div class="rounded bg-white shadow-dark padding-30">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- about text -->
                                <p style="text-align: justify">
                                    I am Yayan Maulana, Web Developer from Bogor, Indonesia. I have a lot of experience in
                                    building web-based application systems like ERP, CRM. E-Commerce, etc. I am also a fast
                                    learner. Everything can be learned except for something I don't want to learn. Give me
                                    space, time and internet access so I can be anything.

                                </p>
                                <div class="mt-3">
                                    <a href="https://www.canva.com/design/DAE76bwHBGA/Jr-QDyh3pY6qipOMCIK-DQ/view?utm_content=DAE76bwHBGA&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton"
                                        target="_blank" class="btn btn-default">Download CV</a>
                                </div>
                                <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                            </div>
                            <div class="col-md-6">
                                <!-- skill item -->
                                <div class="skill-item">
                                    <div class="skill-info clearfix">
                                        <h4 class="float-left mb-3 mt-0">Programming</h4>
                                        <span class="float-right">90%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar data-background" role="progressbar" aria-valuemin="0"
                                            aria-valuemax="100" aria-valuenow="85" data-color="#FFD15C">
                                        </div>
                                    </div>
                                    <div class="spacer" data-height="20"></div>
                                </div>

                                <!-- skill item -->
                                <div class="skill-item">
                                    <div class="skill-info clearfix">
                                        <h4 class="float-left mb-3 mt-0">UI/UX design</h4>
                                        <span class="float-right">50%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar data-background" role="progressbar" aria-valuemin="0"
                                            aria-valuemax="100" aria-valuenow="50" data-color="#FF4C60">
                                        </div>
                                    </div>
                                    <div class="spacer" data-height="20"></div>
                                </div>

                                <!-- skill item -->
                                <div class="skill-item">
                                    <div class="skill-info clearfix">
                                        <h4 class="float-left mb-3 mt-0">Database</h4>
                                        <span class="float-right">80%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar data-background" role="progressbar" aria-valuemin="0"
                                            aria-valuemax="100" aria-valuenow="80" data-color="#6C6CE5">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- row end -->

            {{-- <div class="spacer" data-height="70"></div>

            <div class="row">

                <div class="col-md-3 col-sm-6">
                    <!-- fact item -->
                    <div class="fact-item">
                        <span class="icon icon-fire"></span>
                        <div class="details">
                            <h3 class="mb-0 mt-0 number"><em class="count">198</em></h3>
                            <p class="mb-0">Projects completed</p>
                        </div>
                    </div>
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <!-- fact item -->
                    <div class="fact-item">
                        <span class="icon icon-cup"></span>
                        <div class="details">
                            <h3 class="mb-0 mt-0 number"><em class="count">5670</em></h3>
                            <p class="mb-0">Cup of coffee</p>
                        </div>
                    </div>
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <!-- fact item -->
                    <div class="fact-item">
                        <span class="icon icon-people"></span>
                        <div class="details">
                            <h3 class="mb-0 mt-0 number"><em class="count">427</em></h3>
                            <p class="mb-0">Satisfied clients</p>
                        </div>
                    </div>
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <!-- fact item -->
                    <div class="fact-item">
                        <span class="icon icon-badge"></span>
                        <div class="details">
                            <h3 class="mb-0 mt-0 number"><em class="count">35</em></h3>
                            <p class="mb-0">Nominees winner</p>
                        </div>
                    </div>
                </div>

            </div> --}}

        </div>

    </section>

    <!-- section services -->
    {{-- <section id="services">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">Services</h2>

            <div class="spacer" data-height="60"></div>

            <div class="row">

                <div class="col-md-4">
                    <!-- service box -->
                    <div class="service-box rounded data-background padding-30 text-center text-light shadow-blue"
                        data-color="#6C6CE5">
                        <img src="{{ asset('f/images/service-1.svg') }}" alt="UI/UX design" />
                        <h3 class="mb-3 mt-0">UI/UX design</h3>
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetuer adipiscing elit aenean commodo
                            ligula eget.</p>
                    </div>
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                </div>

                <div class="col-md-4">
                    <!-- service box -->
                    <div class="service-box rounded data-background padding-30 text-center shadow-yellow"
                        data-color="#F9D74C">
                        <img src="{{ asset('f/images/service-2.svg') }}" alt="UI/UX design" />
                        <h3 class="mb-3 mt-0">Web Development</h3>
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetuer adipiscing elit aenean commodo
                            ligula eget.</p>
                    </div>
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                </div>

                <div class="col-md-4">
                    <!-- service box -->
                    <div class="service-box rounded data-background padding-30 text-center text-light shadow-pink"
                        data-color="#F97B8B">
                        <img src="{{ asset('f/images/service-3.svg') }}" alt="UI/UX design" />
                        <h3 class="mb-3 mt-0">Photography</h3>
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetuer adipiscing elit aenean commodo
                            ligula eget.</p>
                    </div>
                </div>

            </div>

            <div class="mt-5 text-center">
                <p class="mb-0">Looking for a custom job? <a href="#contact">Click here</a> to contact me! 👋</p>
            </div>

        </div>

    </section> --}}

    <!-- section experience -->
    <section id="experience">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">Experience</h2>

            <div class="spacer" data-height="60"></div>

            <div class="row">

                <div class="col-md-12">

                    <!-- timeline wrapper -->
                    <div class="timeline exp bg-white rounded shadow-dark padding-30 overflow-hidden">

                        <!-- timeline item -->
                        <div class="timeline-container wow fadeInUp">
                            <div class="content">
                                <span class="time">Sep 2021 - Now</span>
                                <h3 class="title">Software Engineer</h3>
                                <p>Aimsis (PT. TER SOLUSINDO)</p>
                                <ul>
                                    <li>Make report cards according to school needs</li>
                                    <li>Adjust the calculation of grades according to school needs</li>
                                    <li>Track and fix bugs in the school management app</li>
                                    <li>Integrate third party applications with applications (klikpajak) with financial
                                        applications</li>
                                    <li>Design and manufacture the features required by the school</li>
                                </ul>
                            </div>
                        </div>
                        <div class="timeline-container wow fadeInUp">
                            <div class="content">
                                <span class="time">May 2021 - Aug 2022</span>
                                <h3 class="title">Full Stack Developer</h3>
                                <p>PT. VAN AROMA</p>
                                <ul>
                                    <li>Planning, designing, building, testing and releasing new features by request (ERP
                                        systems)</li>
                                    <li>Planning, designing, building, testing and releasing new applications needed (Vendor
                                        Portal, Customer Portal, etc)</li>
                                    <li>ERP system migration from native to Codeigniter 4</li>
                                    <li>Create on-demand report pages such as sales reports, purchase reports etc</li>
                                    <li>Improve existing features to improve application performance</li>
                                    <li>Develop front-end functionality using HTML, CSS, Javascript, jQuery and Bootstrap
                                    </li>
                                    <li>Develop relasional database Query using MySql</li>
                                    <li>integrates third party APIs like chat-api for WhatsApp notifications</li>
                                </ul>
                            </div>
                        </div>

                        <!-- timeline item -->
                        <div class="timeline-container wow fadeInUp" data-wow-delay="0.2s">
                            <div class="content">
                                <span class="time">Mar 2019 - May 2021</span>
                                <h3 class="title">Full Stack Developer & Product Manager</h3>
                                <p>CREATIVE PRODUCTION</p>
                                <ul>
                                    <li>Design products</li>
                                    <li>Build landing page for marketing and advertising needs</li>
                                    <li>Build and maintenance e-commerce (blindo.id)</li>
                                    <li>Manage ads</li>
                                </ul>
                            </div>
                        </div>

                        <!-- timeline item -->
                        <div class="timeline-container wow fadeInUp" data-wow-delay="0.4s">
                            <div class="content">
                                <span class="time">Jan 2018 - Mar 2019</span>
                                <h3 class="title">Full Stack Developer</h3>
                                <p>INTERNUSA</p>
                                <ul>
                                    <li>Build and manage Web Profile</li>
                                    <li>Build and manage Attendace and Payroll App</li>
                                    <li>Build and manage fundraising app</li>
                                    <li>Build and manage Warehouse App</li>
                                </ul>
                            </div>
                        </div>

                        <!-- main line -->
                        <span class="line"></span>

                    </div>

                </div>

                {{-- <div class="col-md-6">

                    <!-- responsive spacer -->
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>

                    <!-- timeline wrapper -->
                    <div class="timeline edu bg-white rounded shadow-dark padding-30 overflow-hidden">

                        <!-- timeline item -->
                        <div class="timeline-container wow fadeInUp">
                            <div class="content">
                                <span class="time">2019 - Present</span>
                                <h3 class="title">Web Designer</h3>
                                <p>Lorem ipsum dolor sit amet quo ei simul congue exerci ad nec admodum perfecto.
                                </p>
                            </div>
                        </div>

                        <!-- timeline item -->
                        <div class="timeline-container wow fadeInUp" data-wow-delay="0.2s">
                            <div class="content">
                                <span class="time">2017 - 2013</span>
                                <h3 class="title">Front-End Developer</h3>
                                <p>Lorem ipsum dolor sit amet quo ei simul congue exerci ad nec admodum perfecto.
                                </p>
                            </div>
                        </div>

                        <!-- timeline item -->
                        <div class="timeline-container wow fadeInUp" data-wow-delay="0.4s">
                            <div class="content">
                                <span class="time">2013 - 2009</span>
                                <h3 class="title">Back-End Developer</h3>
                                <p>Lorem ipsum dolor sit amet quo ei simul congue exerci ad nec admodum perfecto.
                                </p>
                            </div>
                        </div>

                        <!-- main line -->
                        <span class="line"></span>

                    </div>

                </div> --}}

            </div>

        </div>

    </section>

    <!-- section works -->
    <section id="works">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">Recent works</h2>

            <div class="spacer" data-height="60"></div>

            {{-- <!-- portfolio filter (desktop) -->
            <ul class="portfolio-filter list-inline wow fadeInUp">
                <li class="current list-inline-item" data-filter="*">Everything</li>
                <li class="list-inline-item" data-filter=".creative">Creative</li>
                <li class="list-inline-item" data-filter=".art">Art</li>
                <li class="list-inline-item" data-filter=".design">Design</li>
                <li class="list-inline-item" data-filter=".branding">Branding</li>
            </ul>

            <!-- portfolio filter (mobile) -->
            <div class="pf-filter-wrapper">
                <select class="portfolio-filter-mobile">
                    <option value="*">Everything</option>
                    <option value=".creative">Creative</option>
                    <option value=".art">Art</option>
                    <option value=".design">Design</option>
                    <option value=".branding">Branding</option>
                </select>
            </div> --}}

            <!-- portolio wrapper -->
            <div class="row portfolio-wrapper">

                {{-- <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item art">
                    <a href="images/works/1.svg" class="work-image">
                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">Art</span>
                                <h4 class="title">Project Managment Illustration</h4>
                                <span class="more-button"><i class="icon-magnifier-add"></i></span>
                            </div>
                            <div class="thumb">
                                <img src="{{ asset('f/images/works/1.svg') }}" alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                </div> --}}

                <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item">
                    <a href="#gtw" class="work-content">
                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">Codeigniter</span>
                                <h4 class="title">Goestowedding.com</h4>
                                <span class="more-button"><i class="icon-options"></i></span>
                            </div>
                            <div class="thumb">
                                <img src="{{ asset('f/images/yama/gtw.png') }}" alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                    <div id="gtw" class="white-popup zoom-anim-dialog mfp-hide">
                        <img src="{{ asset('f/images/yama/gtw.png') }}" alt="Goestowedding.com" />
                        <h2>Goestowedding.com</h2>
                        <p>This is a project with friends and is a digital wedding invitation. One of the pre-wedding
                            hassles is making, printing, and distributing paper invitations.</p>
                        <p>With Goestowedding you don't need to feel that, because everything only needs to be done in front
                            of your screen.</p>
                        <a href="https://goestowedding.com/" target="_blank"
                            class="btn btn-default">Goestowedding.com</a>
                    </div>
                </div>

                <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item">
                    <a href="#wa" class="work-content">
                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">NodeJs</span>
                                <h4 class="title">WhatsApp Web API</h4>
                                <span class="more-button"><i class="icon-options"></i></span>
                            </div>
                            <div class="thumb">
                                <img src="{{ asset('f/images/yama/wa.png') }}" alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                    <div id="wa" class="white-popup zoom-anim-dialog mfp-hide">
                        <img src="{{ asset('f/images/yama/wa.png') }}" alt="WhatsApp Web API" />
                        <h2>WhatsApp Web API</h2>
                        <p>This is an API to send notifications to the user.</p>
                        <p>This API is already implemented on <a href="https://goestowedding.com/"
                                target="_blank">Goestowedding.com</a>.
                        </p>
                        <a href="https://yama24.github.io/mywaapi/" target="_blank" class="btn btn-default">mywaapi</a>
                    </div>
                </div>

                <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item">
                    <a href="#alqi" class="work-content">
                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">Laravel</span>
                                <h4 class="title">Alifaqiqahcatering.com</h4>
                                <span class="more-button"><i class="icon-options"></i></span>
                            </div>
                            <div class="thumb">
                                <img src="{{ asset('f/images/yama/alqi.png') }}" alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                    <div id="alqi" class="white-popup zoom-anim-dialog mfp-hide">
                        <img src="{{ asset('f/images/yama/alqi.png') }}" alt="Alifaqiqahcatering.com" />
                        <h2>Alifaqiqahcatering.com</h2>
                        <p>A website to market aqiqah services.</p>
                        <p class="text-danger"><b>*Under development</b></p>
                        <a href="https://alifaqiqahcatering.com/" target="_blank"
                            class="btn btn-default">Alifaqiqahcatering.com</a>
                    </div>
                </div>

                <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item">
                    <a href="#humanoo" class="work-content">
                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">Laravel</span>
                                <h4 class="title">Humanoo.id</h4>
                                <span class="more-button"><i class="icon-options"></i></span>
                            </div>
                            <div class="thumb">
                                <img src="{{ asset('f/images/yama/humanoo.png') }}" alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                    <div id="humanoo" class="white-popup zoom-anim-dialog mfp-hide">
                        <img src="{{ asset('f/images/yama/humanoo.png') }}" alt="Humanoo.id" />
                        <h2>Humanoo.id</h2>
                        <p>This is a blog to write whatever we know about programming, we hope this blog is useful for
                            everyone who wants to learn programming.</p>
                        <p>In the future maybe we will develop this into a free learning platform.</p>
                        <p class="text-danger"><b>*Under development</b></p>
                        <a href="/" target="_blank" class="btn btn-default">Humanoo.id</a>
                    </div>
                </div>

                <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item">
                    <a href="#purnamalab" class="work-content">
                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">Statamic</span>
                                <h4 class="title">Purnamalab.com</h4>
                                <span class="more-button"><i class="icon-options"></i></span>
                            </div>
                            <div class="thumb">
                                <img src="{{ asset('f/images/yama/purnamalab.png') }}" alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                    <div id="purnamalab" class="white-popup zoom-anim-dialog mfp-hide">
                        <img src="{{ asset('f/images/yama/purnamalab.png') }}" alt="Purnamalab.com" />
                        <h2>Purnamalab.com</h2>
                        <p>This is a product catalog website from a company that provides chemical test kits.</p>
                        <p>I rebuilt this website using static framework</p>
                        <a href="https://purnamalab.com/" target="_blank" class="btn btn-default">Purnamalab.com</a>
                    </div>
                </div>

                <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item">
                    <a href="#pointapp" class="work-content">
                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">Laravel</span>
                                <h4 class="title">Pointapp.my.id</h4>
                                <span class="more-button"><i class="icon-options"></i></span>
                            </div>
                            <div class="thumb">
                                <img src="{{ asset('f/images/yama/pointapp.png') }}" alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                    <div id="pointapp" class="white-popup zoom-anim-dialog mfp-hide">
                        <img src="{{ asset('f/images/yama/pointapp.png') }}" alt="pointapp.my.id" />
                        <h2>pointapp.my.id</h2>
                        <p>This is a point of sales and inventory app built on laravel and mysql database</p>
                        <p>With cart system and realtime stock make the point of sales more powerfull</p>
                        <p>And you can use thermal printer with any size</p>
                        <a href="https://pointapp.my.id/" target="_blank" class="btn btn-default">Pointapp.my.id</a>
                    </div>
                </div>


                {{-- <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item branding">
                    <a href="https://www.youtube.com/watch?v=qf9z4ulfmYw" class="work-video">
                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">Branding</span>
                                <h4 class="title">Delivery App Wireframe</h4>
                                <span class="more-button"><i class="icon-camrecorder"></i></span>
                            </div>
                            <div class="thumb">
                                <img src="{{ asset('f/images/works/3.svg') }}" alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item creative">
                    <a href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/240233494&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
                        class="work-video">
                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">Creative</span>
                                <h4 class="title">Onboarding Motivation</h4>
                                <span class="more-button"><i class="icon-music-tone-alt"></i></span>
                            </div>
                            <div class="thumb">
                                <img src="{{ asset('f/images/works/4.svg') }}" alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item art branding">
                    <a href="#gallery-1" class="gallery-link">
                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">Art, Branding</span>
                                <h4 class="title">iMac Mockup Design</h4>
                                <span class="more-button"><i class="icon-picture"></i></span>
                            </div>
                            <div class="thumb">
                                <img src="{{ asset('f/images/works/5.svg') }}" alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                    <div id="gallery-1" class="gallery mfp-hide">
                        <a href="images/works/5.svg"></a>
                        <a href="images/works/4.svg"></a>
                    </div>
                </div>

                <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item creative design">
                    <a href="https://themeforest.net/user/pxlsolutions/portfolio" target="_blank">
                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">Creative, Design</span>
                                <h4 class="title">Game Store App Concept</h4>
                                <span class="more-button"><i class="icon-link"></i></span>
                            </div>
                            <div class="thumb">
                                <img src="{{ asset('f/images/works/6.svg') }}" alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                </div> --}}

            </div>

            <!-- more button -->
            {{-- <div class="load-more text-center mt-4">
                <a href="javascript:" class="btn btn-default"><i class="fas fa-spinner"></i> Load more</a>
                <!-- numbered pagination (hidden for infinite scroll) -->
                <ul class="portfolio-pagination list-inline d-none">
                    <li class="list-inline-item">1</li>
                    <li class="list-inline-item"><a href="works-2.html">2</a></li>
                </ul>
            </div> --}}

        </div>

    </section>

    <!-- section tech -->
    <section id="tech">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">The Tech</h2>

            {{-- <div class="spacer" data-height="60"></div> --}}

            <!-- testimonials wrapper -->
            {{-- <div class="testimonials-wrapper">

                <!-- testimonial item -->
                <div class="testimonial-item text-center mx-auto">
                    <div class="thumb mb-3 mx-auto">
                        <img src="{{ asset('f/images/avatar-3.svg') }}" alt="customer-name" />
                    </div>
                    <h4 class="mt-3 mb-0">John Doe</h4>
                    <span class="subtitle">Product designer at Dribbble</span>
                    <div class="bg-white padding-30 shadow-dark rounded triangle-top position-relative mt-4">
                        <p class="mb-0">I enjoy working with the theme and learn so much. You guys make the
                            process
                            fun and interesting. Good luck! 👍</p>
                    </div>
                </div>

                <!-- testimonial item -->
                <div class="testimonial-item text-center mx-auto">
                    <div class="thumb mb-3 mx-auto">
                        <img src="{{ asset('f/images/avatar-1.svg') }}" alt="customer-name" />
                    </div>
                    <h4 class="mt-3 mb-0">John Doe</h4>
                    <span class="subtitle">Product designer at Dribbble</span>
                    <div class="bg-white padding-30 shadow-dark rounded triangle-top position-relative mt-4">
                        <p class="mb-0">I enjoy working with the theme and learn so much. You guys make the
                            process
                            fun and interesting. Good luck! 🔥</p>
                    </div>
                </div>

            </div> --}}

            <div class="row">
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img data-bs-toggle="tooltip" data-bs-placement="top" title="HTML"
                                src="{{ asset('f/images/yama/html.svg') }}" width="50px" alt="HTML" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img data-bs-toggle="tooltip" data-bs-placement="top" title="CSS3"
                                src="{{ asset('f/images/yama/css3.svg') }}" width="70px" alt="CSS3" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img data-bs-toggle="tooltip" data-bs-placement="top" title="Javascript"
                                src="{{ asset('f/images/yama/javascript.svg') }}" width="60px" alt="Javascript" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img data-bs-toggle="tooltip" data-bs-placement="top" title="jQuery"
                                src="{{ asset('f/images/yama/jquery.svg') }}" width="70px" alt="jQuery" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img data-bs-toggle="tooltip" data-bs-placement="top" title="Vue.js"
                                src="{{ asset('f/images/yama/vuejs.svg') }}" width="70px" alt="Vue.js" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img data-bs-toggle="tooltip" data-bs-placement="top" title="Bootstrap"
                                src="{{ asset('f/images/yama/bootstrap.svg') }}" width="70px" alt="Bootstrap" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img data-bs-toggle="tooltip" data-bs-placement="top" title="PHP"
                                src="{{ asset('f/images/yama/php.svg') }}" width="70px" alt="PHP" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img data-bs-toggle="tooltip" data-bs-placement="top" title="Composer"
                                src="{{ asset('f/images/yama/composer.svg') }}" width="50px" alt="Composer" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img data-bs-toggle="tooltip" data-bs-placement="top" title="Codeigniter"
                                src="{{ asset('f/images/yama/codeigniter.svg') }}" width="50px" alt="Codeigniter" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img data-bs-toggle="tooltip" data-bs-placement="top" title="Laravel"
                                src="{{ asset('f/images/yama/laravel.svg') }}" width="50px" alt="Laravel" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img data-bs-toggle="tooltip" data-bs-placement="top" title="Statamic"
                                src="{{ asset('f/images/yama/statamic.svg') }}" width="70px" alt="Statamic" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img data-bs-toggle="tooltip" data-bs-placement="top" title="Apache"
                                src="{{ asset('f/images/yama/apache.svg') }}" width="60px" alt="Apache" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img data-bs-toggle="tooltip" data-bs-placement="top" title="nginx"
                                src="{{ asset('f/images/yama/nginx.svg') }}" width="50px" alt="nginx" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img data-bs-toggle="tooltip" data-bs-placement="top" title="NodeJS"
                                src="{{ asset('f/images/yama/node-js.svg') }}" width="50px" alt="NodeJS" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img data-bs-toggle="tooltip" data-bs-placement="top" title="npm"
                                src="{{ asset('f/images/yama/npm.svg') }}" width="50px" alt="npm" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img data-bs-toggle="tooltip" data-bs-placement="top" title="yarn"
                                src="{{ asset('f/images/yama/yarn.svg') }}" width="50px" alt="yarn" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img data-bs-toggle="tooltip" data-bs-placement="top" title="MySQL"
                                src="{{ asset('f/images/yama/mysql.svg') }}" width="70px" alt="MySQL" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img data-bs-toggle="tooltip" data-bs-placement="top" title="mongoDB"
                                src="{{ asset('f/images/yama/mongodb.svg') }}" width="70px" alt="mongoDB" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img data-bs-toggle="tooltip" data-bs-placement="top" title="Postman"
                                src="{{ asset('f/images/yama/postman.svg') }}" width="50px" alt="Postman" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img data-bs-toggle="tooltip" data-bs-placement="top" title="Ubuntu"
                                src="{{ asset('f/images/yama/ubuntu.svg') }}" width="80px" alt="Ubuntu" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img data-bs-toggle="tooltip" data-bs-placement="top" title="Debian"
                                src="{{ asset('f/images/yama/debian.svg') }}" width="40px" alt="Debian" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img data-bs-toggle="tooltip" data-bs-placement="top" title="Linux"
                                src="{{ asset('f/images/yama/linux.svg') }}" width="50px" alt="Linux" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img data-bs-toggle="tooltip" data-bs-placement="top" title="Docker"
                                src="{{ asset('f/images/yama/docker.svg') }}" width="60px" alt="Docker" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img data-bs-toggle="tooltip" data-bs-placement="top" title="Git"
                                src="{{ asset('f/images/yama/git.svg') }}" width="50px" alt="Git" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img data-bs-toggle="tooltip" data-bs-placement="top" title="Github"
                                src="{{ asset('f/images/yama/github.svg') }}" width="60px" alt="Github" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img data-bs-toggle="tooltip" data-bs-placement="top" title="Bitbucket"
                                src="{{ asset('f/images/yama/bitbucket.svg') }}" width="50px" alt="Bitbucket" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img data-bs-toggle="tooltip" data-bs-placement="top" title="Linode"
                                src="{{ asset('f/images/yama/linode.svg') }}" width="80px" alt="Linode" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <!-- client item -->
                    <div class="client-item">
                        <div class="inner">
                            <img data-bs-toggle="tooltip" data-bs-placement="top" title="VSCode"
                                src="{{ asset('f/images/yama/visual-studio-code.svg') }}" width="50px"
                                alt="VSCode" />
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- section certification -->
    <section id="certification">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">Certification</h2>

            <div class="spacer" data-height="60"></div>

            <!-- portolio wrapper -->
            <div class="row portfolio-wrapper">

                <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item">
                    <a href="{{ asset('f/images/yama/html.jpg') }}" class="work-image">
                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">Certificate</span>
                                <h4 class="title">HTML</h4>
                                <span class="more-button"><i class="icon-magnifier-add"></i></span>
                            </div>
                            <div class="thumb">
                                <img src="{{ asset('f/images/yama/html.jpg') }}" alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item">
                    <a href="{{ asset('f/images/yama/sql.png') }}" class="work-image">
                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">Certificate</span>
                                <h4 class="title">SQL</h4>
                                <span class="more-button"><i class="icon-magnifier-add"></i></span>
                            </div>
                            <div class="thumb">
                                <img src="{{ asset('f/images/yama/sql.png') }}" alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item">
                    <a href="{{ asset('f/images/yama/css.jpg') }}" class="work-image">
                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">Certificate</span>
                                <h4 class="title">CSS</h4>
                                <span class="more-button"><i class="icon-magnifier-add"></i></span>
                            </div>
                            <div class="thumb">
                                <img src="{{ asset('f/images/yama/css.jpg') }}" alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item">
                    <a href="{{ asset('f/images/yama/php.jpg') }}" class="work-image">
                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">Certificate</span>
                                <h4 class="title">PHP</h4>
                                <span class="more-button"><i class="icon-magnifier-add"></i></span>
                            </div>
                            <div class="thumb">
                                <img src="{{ asset('f/images/yama/php.jpg') }}" alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item">
                    <a href="{{ asset('f/images/yama/javascript.png') }}" class="work-image">
                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">Certificate</span>
                                <h4 class="title">javaScript</h4>
                                <span class="more-button"><i class="icon-magnifier-add"></i></span>
                            </div>
                            <div class="thumb">
                                <img src="{{ asset('f/images/yama/javascript.png') }}" alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item">
                    <a href="{{ asset('f/images/yama/jquery.jpg') }}" class="work-image">
                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">Certificate</span>
                                <h4 class="title">jQuery</h4>
                                <span class="more-button"><i class="icon-magnifier-add"></i></span>
                            </div>
                            <div class="thumb">
                                <img src="{{ asset('f/images/yama/jquery.jpg') }}" alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- portfolio item -->
                <div class="col-md-4 col-sm-6 grid-item">
                    <a href="{{ asset('f/images/yama/python.png') }}" class="work-image">
                        <div class="portfolio-item rounded shadow-dark">
                            <div class="details">
                                <span class="term">Certificate</span>
                                <h4 class="title">Python</h4>
                                <span class="more-button"><i class="icon-magnifier-add"></i></span>
                            </div>
                            <div class="thumb">
                                <img src="{{ asset('f/images/yama/python.png') }}" alt="Portfolio-title" />
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>

        </div>

    </section>

    <!-- section blog -->
    <section id="blog">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">Latest Posts</h2>

            <div class="spacer" data-height="60"></div>

            <div class="row blog-wrapper">
                @foreach ($posts as $post)
                    <div class="col-md-4">
                        <!-- blog item -->
                        <div class="blog-item rounded bg-white shadow-dark wow fadeIn">
                            <div class="thumb">
                                <a href="/read/{{ $post->slug }}" target="_blank">
                                    <span class="category">{{ $post->category->name }}</span>
                                </a>
                                <a href="/read/{{ $post->slug }}" target="_blank">
                                    <img src="{{ asset(Storage::url('posts/' . $post->image)) }}"
                                        alt="{{ $post->title }}" />
                                </a>
                            </div>
                            <div class="details">
                                <h4 class="my-0 title"><a href="/read/{{ $post->slug }}"
                                        target="_blank">{{ $post->title }}</a>
                                </h4>
                                <ul class="list-inline meta mb-0 mt-2">
                                    <li class="list-inline-item">{{ date('M d, Y', strtotime($post->published_at)) }}
                                    </li>
                                    <li class="list-inline-item">{{ $post->author->name }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

    </section>

    <!-- section contact -->
    {{-- <section id="contact">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp">Get In Touch</h2>

            <div class="spacer" data-height="60"></div>

            <div class="row">

                <div class="col-md-4">
                    <!-- contact info -->
                    <div class="contact-info">
                        <h3 class="wow fadeInUp">Let's talk about everything!</h3>
                        <p class="wow fadeInUp">Don't like forms? Send me an <a href="mailto:name@example.com">email</a>.
                            👋</p>
                    </div>
                </div>

                <div class="col-md-8">
                    <!-- Contact Form -->
                    <form id="contact-form" class="contact-form mt-6" method="post" action="form/contact.php">

                        <div class="messages"></div>

                        <div class="row">
                            <div class="column col-md-6">
                                <!-- Name input -->
                                <div class="form-group">
                                    <input type="text" class="form-control" name="InputName" id="InputName"
                                        placeholder="Your name" required="required" data-error="Name is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="column col-md-6">
                                <!-- Email input -->
                                <div class="form-group">
                                    <input type="email" class="form-control" id="InputEmail" name="InputEmail"
                                        placeholder="Email address" required="required" data-error="Email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="column col-md-12">
                                <!-- Email input -->
                                <div class="form-group">
                                    <input type="text" class="form-control" id="InputSubject" name="InputSubject"
                                        placeholder="Subject" required="required" data-error="Subject is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="column col-md-12">
                                <!-- Message textarea -->
                                <div class="form-group">
                                    <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" placeholder="Message"
                                        required="required" data-error="Message is required."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" name="submit" id="submit" value="Submit" class="btn btn-default">Send
                            Message</button><!-- Send Button -->

                    </form>
                    <!-- Contact Form end -->
                </div>

            </div>

        </div>

    </section> --}}

    <div class="spacer" data-height="96"></div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            });
            $.ajax({
                url: "{{ route('notifYama') }}",
                data: {},
                type: 'POST',
                success: function(data) {},
                error: function(data) {
                    console.log("error: ", data);
                },
            });
        })
    </script>
@endsection
