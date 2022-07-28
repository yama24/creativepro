@extends('f._layout')
@section('meta')
    <!-- HTML Meta Tags -->
    <title>{{ $title }} - Human∞.id</title>
    <meta name="description" content="< let's talk about code! >">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP, MySQL, Laravel, Codeigniter, Ubuntu, Linux, jQuery, Bootstrap, NodeJS">
    <meta name="author" content="Gilang Aryadi Mahardika">
	<meta name="viewport" content="width=device-width, initial-scale=0">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="{{ $title }} - Human∞.id">
    <meta itemprop="description" content="< let's talk about code! >">
    <meta itemprop="image" content="{{ asset('humanooid-fav-head.svg') }}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $title }} - Human∞.id">
    <meta property="og:description" content="< let's talk about code! >">
    <meta property="og:image" content="{{ asset('humanooid-fav-head.svg') }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title }} - Human∞.id">
    <meta name="twitter:description" content="< let's talk about code! >">
    <meta name="twitter:image" content="{{ asset('humanooid-fav-head.svg') }}">

    <!-- Meta Tags Generated via http://heymeta.com -->

	<style>
		.client-item .inner img{
			max-width: 92px;
			height: 48px;
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
			<img class="img-fluid rounded-circle mb-4" src="{{ asset('f/images/gilang.webp') }}" alt="Yama" width="108px">

			<!-- info -->
			<h1 class="mb-2 mt-0">Gilang Aryadi Mahardika (Marchites)</h1>
			<span>I'm a <span class="text-rotating">Front-end developer, PHP
					programmer, Javascript programmer, MySQL programmer, UI/X Designer, Logos Designer, Branding Designer</span></span>

			<!-- social icons -->
			<ul class="social-icons light list-inline mb-0 mt-4">
				<li class="list-inline-item"><a href="https://www.instagram.com/gilang_aryadi/"><i class="fab fa-instagram"></i></a></li>
				<li class="list-inline-item"><a href="https://web.facebook.com/gilang.aryadi.10/"><i class="fab fa-facebook"></i></a></li>
				<li class="list-inline-item"><a href="https://www.linkedin.com/in/gilang-aryadi-mahardika-5952a910b/"><i class="fab fa-linkedin"></i></a></li>
				<!-- <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li> -->
				<!-- <li class="list-inline-item"><a href="#"><i class="fab fa-behance"></i></a></li> -->
				<!-- <li class="list-inline-item"><a href="#"><i class="fab fa-dribbble"></i></a></li> -->
				<!-- <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest-p"></i></a></li> -->
			</ul>

			<!-- buttons -->
			<div class="mt-4">
				<a href="https://api.whatsapp.com/send/?phone=089628274162&text&type=phone_number&app_absent=0" class="btn btn-default">Hire me</a>
			</div>
		</div>

		<!-- scroll down mouse wheel -->
		<div class="scroll-down">
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
				<rect transform="rotate(30 9.86603 10.13397)" x="7" width="3" height="25" rx="1.5" fill="#FFD15C"
					fill-rule="evenodd" />
			</svg>

			<svg width="15" height="23" data-depth="0.2" class="layer p5" xmlns="http://www.w3.org/2000/svg">
				<rect transform="rotate(30 9.86603 10.13397)" x="7" width="3" height="25" rx="1.5" fill="#6C6CE5"
					fill-rule="evenodd" />
			</svg>

			<svg width="49" height="17" data-depth="0.5" class="layer p6" xmlns="http://www.w3.org/2000/svg">
				<g fill="#FF4C60" fill-rule="evenodd">
					<path
						d="M.5 16.5c0-5.71709 2.3825-10.99895 6.25-13.8567 3.8675-2.85774 8.6325-2.85774 12.5 0C23.1175 5.50106 25.5 10.78292 25.5 16.5H23c0-4.57303-1.90625-8.79884-5-11.08535-3.09375-2.28652-6.90625-2.28652-10 0C4.90625 7.70116 3 11.92697 3 16.5H.5z" />
					<path
						d="M23.5 16.5c0-5.71709 2.3825-10.99895 6.25-13.8567 3.8675-2.85774 8.6325-2.85774 12.5 0C46.1175 5.50106 48.5 10.78292 48.5 16.5H46c0-4.57303-1.90625-8.79884-5-11.08535-3.09375-2.28652-6.90625-2.28652-10 0-3.09375 2.28651-5 6.51232-5 11.08535h-2.5z" />
				</g>
			</svg>

			<svg width="26" height="26" data-depth="0.4" class="layer p7" xmlns="http://www.w3.org/2000/svg">
				<path d="M13 22.6459L2.42705 1.5h21.1459L13 22.6459z" stroke="#FFD15C" stroke-width="3" fill="none"
					fill-rule="evenodd" />
			</svg>

			<svg width="19" height="21" data-depth="0.3" class="layer p8" xmlns="http://www.w3.org/2000/svg">
				<rect transform="rotate(-40 6.25252 10.12626)" x="7" width="3" height="25" rx="1.5" fill="#6C6CE5"
					fill-rule="evenodd" />
			</svg>

			<svg width="30" height="25" data-depth="0.3" data-depth-y="-1.30" class="layer p9"
				xmlns="http://www.w3.org/2000/svg">
				<path
					d="M29.8564 16.0718c-2.85854 4.95114-8.1405 8.00057-13.85654 8.00024-5.71605-.00032-10.9981-3.04992-13.85641-8-2.8583-4.95007-2.8584-11.0491.00014-16.00024l2.77128 1.6c-2.28651 3.96036-2.28631 8.84002-.00011 12.8002 2.2862 3.96017 6.5124 6.40017 11.08513 6.4 4.57271-.00018 8.79872-2.43984 11.08524-6.4002l2.77128 1.6z"
					fill="#6C6CE5" fill-rule="evenodd" />
			</svg>

			<svg width="47" height="29" data-depth="0.2" class="layer p10" xmlns="http://www.w3.org/2000/svg">
				<g fill="#44D7B6" fill-rule="evenodd">
					<path
						d="M46.78878 17.19094c-1.95535 5.3723-6.00068 9.52077-10.61234 10.8834-4.61167 1.36265-9.0893-.26708-11.74616-4.27524-2.65686-4.00817-3.08917-9.78636-1.13381-15.15866l2.34923.85505c-1.56407 4.29724-1.2181 8.92018.90705 12.12693 2.12514 3.20674 5.70772 4.5107 9.39692 3.4202 3.68921-1.0905 6.92581-4.40949 8.48988-8.70673l2.34923.85505z" />
					<path
						d="M25.17585 9.32448c-1.95535 5.3723-6.00068 9.52077-10.61234 10.8834-4.61167 1.36264-9.0893-.26708-11.74616-4.27525C.16049 11.92447-.27182 6.14628 1.68354.77398l2.34923.85505c-1.56407 4.29724-1.2181 8.92018.90705 12.12692 2.12514 3.20675 5.70772 4.5107 9.39692 3.4202 3.68921-1.0905 6.92581-4.40948 8.48988-8.70672l2.34923.85505z" />
				</g>
			</svg>

			<svg width="33" height="20" data-depth="0.5" class="layer p11" xmlns="http://www.w3.org/2000/svg">
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
					<img class="img-fluid rounded-circle" src="{{ asset('f/images/gilang_black.jpg') }}" alt="Yama"
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
								I am Gilang Aryadi Mahardika, Web Developer from Bandung, Indonesia. I have a lot of experience in
								building web-based application systems on Front-end Developement side. I'm a Designer UIX enthusiast too.
							</p>
							<div class="mt-3">
								<a href="https://www.canva.com/design/DAFHsBYObSQ/TfSVO2RdUvDyD_Hl9mAQAQ/view?utm_content=DAFHsBYObSQ&utm_campaign=designshare&utm_medium=link&utm_source=publishsharelink" class="btn btn-default">Download CV</a>
							</div>
							<div class="spacer d-md-none d-lg-none" data-height="30"></div>
						</div>
						<div class="col-md-6">
							<!-- skill item -->
							<div class="skill-item">
								<div class="skill-info clearfix">
									<h4 class="float-left mb-3 mt-0">Development</h4>
									<span class="float-right">50%</span>
								</div>
								<div class="progress">
									<div class="progress-bar data-background" role="progressbar" aria-valuemin="0"
										aria-valuemax="100" aria-valuenow="50" data-color="#FFD15C">
									</div>
								</div>
								<div class="spacer" data-height="20"></div>
							</div>

							<!-- skill item -->
							<div class="skill-item">
								<div class="skill-info clearfix">
									<h4 class="float-left mb-3 mt-0">UI Design</h4>
									<span class="float-right">95%</span>
								</div>
								<div class="progress">
									<div class="progress-bar data-background" role="progressbar" aria-valuemin="0"
										aria-valuemax="100" aria-valuenow="95" data-color="#FF4C60">
									</div>
								</div>
								<div class="spacer" data-height="20"></div>
							</div>

							<!-- skill item -->
							<div class="skill-item">
								<div class="skill-info clearfix">
									<h4 class="float-left mb-3 mt-0">Design Branding & Logos</h4>
									<span class="float-right">60%</span>
								</div>
								<div class="progress">
									<div class="progress-bar data-background" role="progressbar" aria-valuemin="0"
										aria-valuemax="100" aria-valuenow="60" data-color="#6C6CE5">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- row end -->
	
	</div>

</section>

<!-- section services -->
<section id="services">

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
					<h3 class="mb-3 mt-0">UI Design</h3>
					<p class="mb-0">We help your web design, according to your wishes and needs</p>
				</div>
				<div class="spacer d-md-none d-lg-none" data-height="30"></div>
			</div>

			<div class="col-md-4">
				<!-- service box -->
				<div class="service-box rounded data-background padding-30 text-center shadow-yellow"
					data-color="#F9D74C">
					<img src="{{ asset('f/images/service-2.svg') }}" alt="UI Design" />
					<h3 class="mb-3 mt-0">Web Development</h3>
					<p class="mb-0">We Develop your website with technology that is constantly updated</p>
				</div>
				<div class="spacer d-md-none d-lg-none" data-height="30"></div>
			</div>

			<div class="col-md-4">
				<!-- service box -->
				<div class="service-box rounded data-background padding-30 text-center text-light shadow-pink"
					data-color="#F97B8B">
					<img src="{{ asset('f/images/service-4.svg') }}" alt="UI Design" />
					<h3 class="mb-3 mt-0">Design Branding & Logos</h3>
					<p class="mb-0">We help you to introduce your product to the world</p>
				</div>
			</div>

		</div>

		<div class="mt-5 text-center">
			<p class="mb-0">Looking for a custom job? <a href="https://api.whatsapp.com/send/?phone=089628274162&text&type=phone_number&app_absent=0">Click here</a> to contact me! 👋</p>
		</div>

	</div>

</section>

<!-- section experience -->
<section id="experience">

	<div class="container">

		<!-- section title -->
		<h2 class="section-title wow fadeInUp">Experience</h2>

		<div class="spacer" data-height="60"></div>

		<div class="row">

			<div class="col-md-6">

				<!-- timeline wrapper -->
				<div class="timeline edu bg-white rounded shadow-dark padding-30 overflow-hidden">

					<!-- timeline item -->
					<div class="timeline-container wow fadeInUp">
						<div class="content">
							<span class="time">2022 - Present</span>
							<h3 class="title">Program Beasiswa IDCamp 2022 by Indosat Ooredo Hutchison</h3>
							<p>
								<p class="sub-title">DICODING.COM</p>
								<uL>
									<li> Front-End Web, React Learning
								</ul>
							</p>
						</div>
					</div>

					<!-- main line -->
					<span class="line"></span>

				</div>

			</div>

			<div class="col-md-6">

				<!-- responsive spacer -->
				<div class="spacer d-md-none d-lg-none" data-height="30"></div>

				<!-- timeline wrapper -->
				<div class="timeline exp bg-white rounded shadow-dark padding-30 overflow-hidden">

					<!-- timeline item -->
					<div class="timeline-container wow fadeInUp">
						<div class="content">
							<span class="time">2022 - Present</span>
							<h3 class="title">Web Designer (UI Designer)</h3>
							<p class="subtitle">MEDIA BERBAGI<p>
							<p>
								<ul>
									<li> Designing UI Dashboard
									<li> Designing wireframing Dashboard (Lo-fi and Mi-fi)
								</ul>
							</p>
						</div>
					</div>

					<!-- timeline item -->
					<div class="timeline-container wow fadeInUp" data-wow-delay="0.2s">
						<div class="content">
							<span class="time">2021 - 2022</span>
							<h3 class="title">Front-End Web Developer Junior</h3>
							<p class="subtitle">PT. DIGITAL AGENSI NUSANTARA<p>
							<p>
								<ul>
									<li> Slice the view in UI Design into lines of code
									<li> Build and develop websites using the Laravel framework
								</ul>
							</p>
						</div>
					</div>

					<!-- timeline item -->
					<div class="timeline-container wow fadeInUp" data-wow-delay="0.4s">
						<div class="content">
							<span class="time">2019 - 2021</span>
							<h3 class="title">Front-End Web Developer Junior</h3>
							<p class="subtitle">INTERNUSA BANDUNG<p>
							<p>
								<ul>
									<li> Build and develop websites
									<li> Help senior programmers to build website
								</ul>
							</p>
						</div>
					</div>

					<!-- main line -->
					<span class="line"></span>

				</div>

			</div>

		</div>

	</div>

</section>

<!-- section works -->
<section id="works">

	<div class="container">

		<!-- section title -->
		<h2 class="section-title wow fadeInUp">Recent works</h2>

		<div class="spacer" data-height="60"></div>

		<!-- portfolio filter (desktop) -->
		<ul class="portfolio-filter list-inline wow fadeInUp">
			<li class="current list-inline-item" data-filter="*">Everything</li>
			<li class="list-inline-item" data-filter=".front-end">Front-End Web</li>
			<li class="list-inline-item" data-filter=".uix">UI Designs</li>
			<li class="list-inline-item" data-filter=".design">Design Branding & Logos</li>
			<!-- <li class="list-inline-item" data-filter=".branding">Branding</li> -->
		</ul>

		<!-- portfolio filter (mobile) -->
		<div class="pf-filter-wrapper">
			<select class="portfolio-filter-mobile">
				<option value="*">Everything</option>
				<option value=".front-end">Front-End Web</option>
				<option value=".uix">UI Designs</option>
				<option value=".design">Design Branding & Logos</option>
				<!-- <option value=".branding">Branding</option> -->
			</select>
		</div>

		<!-- portolio wrapper -->
		<div class="row portfolio-wrapper">

			<!-- portfolio item -->
			<div class="col-md-4 col-sm-6 grid-item front-end">
				<a href="#portfolio_1" class="work-content">
					<div class="portfolio-item rounded shadow-dark">
						<div class="details">
							<span class="term">Front-end Web</span>
							<h4 class="title">Humanoo.id - Let's talk about code</h4>
							<span class="more-button"><i class="icon-options"></i></span>
						</div>
						<div class="thumb">
							<img src="{{ asset('f/images/marchites/humanoo.id.png') }}" alt="Portfolio-title" />
							<div class="mask"></div>
						</div>
					</div>
				</a>
				<div id="portfolio_1" class="white-popup zoom-anim-dialog mfp-hide">
					<img src="{{ asset('f/images/marchites/humanoo.id.png') }}" alt="Title" />
					<h2>Humanoo.id - Let's talk about code</h2>
					<p>This is a blog to write whatever we know about programming, we hope this blog is useful for everyone who wants to learn programming.
					In the future maybe we will develop this into a free learning platform.
					*Under development</p>
					<a href="https://www.humanoo.id" class="btn btn-default">visit</a>
				</div>
			</div>

			<!-- portfolio item -->
			<div class="col-md-4 col-sm-6 grid-item front-end">
				<a href="#portfolio_2" class="work-content">
					<div class="portfolio-item rounded shadow-dark">
						<div class="details">
							<span class="term">Front-end Web</span>
							<h4 class="title">Alif Aqiqah & Catering - Aqiqah Website</h4>
							<span class="more-button"><i class="icon-options"></i></span>
						</div>
						<div class="thumb">
							<img src="{{ asset('f/images/marchites/alifaqiqahcatering.com.png') }}" alt="Portfolio-title" />
							<div class="mask"></div>
						</div>
					</div>
				</a>
				<div id="portfolio_2" class="white-popup zoom-anim-dialog mfp-hide">
					<img src="{{ asset('f/images/marchites/alifaqiqahcatering.com.png') }}" alt="Title" />
					<h2>Alif Aqiqah & Catering - Catering Website</h2>
					<p>This is a website to serve Aqiqah order process and branding</p>
					<a href="https://www.alifaqiqahcatering.com" class="btn btn-default">visit</a>
				</div>
			</div>

			<!-- portfolio item -->
			<div class="col-md-4 col-sm-6 grid-item front-end">
				<a href="#portfolio_3" class="work-content">
					<div class="portfolio-item rounded shadow-dark">
						<div class="details">
							<span class="term">Front-end Web</span>
							<h4 class="title">Forfund.asia</h4>
							<span class="more-button"><i class="icon-options"></i></span>
						</div>
						<div class="thumb">
							<img src="{{ asset('f/images/marchites/forfund.png') }}" alt="Portfolio-title" />
							<div class="mask"></div>
						</div>
					</div>
				</a>
				<div id="portfolio_3" class="white-popup zoom-anim-dialog mfp-hide">
					<img src="{{ asset('f/images/marchites/forfund.png') }}" alt="Title" />
					<h2>Forfund.asia</h2>
					<p>This is a website for funding, usable for NGO and funding instation</p>
					<a href="https://www.alifaqiqahcatering.com" class="btn btn-default">visit</a>
				</div>
			</div>

			<!-- portfolio item -->
			<div class="col-md-4 col-sm-6 grid-item design">
				<a href="#portfolio_4" class="work-content">
					<div class="portfolio-item rounded shadow-dark">
						<div class="details">
							<span class="term">Design Branding & Logos</span>
							<h4 class="title">Logo Ichi Mochi</h4>
							<span class="more-button"><i class="icon-options"></i></span>
						</div>
						<div class="thumb">
							<img src="{{ asset('f/images/marchites/ichi-mochi.png') }}" alt="Portfolio-title" />
							<div class="mask"></div>
						</div>
					</div>
				</a>
				<div id="portfolio_4" class="white-popup zoom-anim-dialog mfp-hide">
					<img src="{{ asset('f/images/marchites/ichi-mochi.png') }}" alt="Title" />
					<h2>logo Ichi Mochi</h2>
					<p>This is a logo of food Brand in Bandung build with CorelDraw</p>
					<a href="#" class="btn btn-default">visit</a>
				</div>
			</div>

			<!-- portfolio item -->
			<div class="col-md-4 col-sm-6 grid-item design">
				<a href="#portfolio_5" class="work-content">
					<div class="portfolio-item rounded shadow-dark">
						<div class="details">
							<span class="term">Design Branding & Logos</span>
							<h4 class="title">Logo Humanoo.id</h4>
							<span class="more-button"><i class="icon-options"></i></span>
						</div>
						<div class="thumb">
							<img src="{{ asset('f/images/marchites/humanoo.id-logo.png') }}" alt="Portfolio-title" />
							<div class="mask"></div>
						</div>
					</div>
				</a>
				<div id="portfolio_5" class="white-popup zoom-anim-dialog mfp-hide">
					<img src="{{ asset('f/images/marchites/humanoo.id-logo.png') }}" alt="Title" />
					<h2>Logo Humanoo.id</h2>
					<p>This is the humanoo.id logos build with CorelDraw</p>
					<a href="#" class="btn btn-default">visit</a>
				</div>
			</div>

			<!-- portfolio item -->
			<div class="col-md-4 col-sm-6 grid-item design">
				<a href="#portfolio_6" class="work-content">
					<div class="portfolio-item rounded shadow-dark">
						<div class="details">
							<span class="term">Design Branding & Logos</span>
							<h4 class="title">Logo UNO Production</h4>
							<span class="more-button"><i class="icon-options"></i></span>
						</div>
						<div class="thumb">
							<img src="{{ asset('f/images/marchites/uno.png') }}" alt="Portfolio-title" />
							<div class="mask"></div>
						</div>
					</div>
				</a>
				<div id="portfolio_6" class="white-popup zoom-anim-dialog mfp-hide">
					<img src="{{ asset('f/images/marchites/uno.png') }}" alt="Title" />
					<h2>Logo UNO Production</h2>
					<p>Design Logo UNO Production</p>
					<a href="#" class="btn btn-default">visit</a>
				</div>
			</div>


			<!-- portfolio item -->
			<div class="col-md-4 col-sm-6 grid-item uix">
				<a href="#portfolio_7" class="work-content">
					<div class="portfolio-item rounded shadow-dark">
						<div class="details">
							<span class="term">UI/X Design</span>
							<h4 class="title">Redesign UI MediaBerbagi ver.2</h4>
							<span class="more-button"><i class="icon-options"></i></span>
						</div>
						<div class="thumb">
							<img src="{{ asset('f/images/marchites/mediaberbagi.png') }}" alt="Portfolio-title" />
							<div class="mask"></div>
						</div>
					</div>
				</a>
				<div id="portfolio_7" class="white-popup zoom-anim-dialog mfp-hide">
					<img src="{{ asset('f/images/marchites/mediaberbagi.png') }}" alt="Title" />
					<h2>Redesign UI MediaBerbagi ver.2</h2>
					<p>Redesign UI MediaBerbagi build with Figma</p>
					<a href="#" class="btn btn-default">visit</a>
				</div>
			</div>

			<!-- portfolio item -->
			<div class="col-md-4 col-sm-6 grid-item uix">
				<a href="#portfolio_8" class="work-content">
					<div class="portfolio-item rounded shadow-dark">
						<div class="details">
							<span class="term">UI/X Design</span>
							<h4 class="title">Redesign Dashboard Mediaberbagi ver.2</h4>
							<span class="more-button"><i class="icon-options"></i></span>
						</div>
						<div class="thumb">
							<img src="{{ asset('f/images/marchites/dash-mediaberbagi.png') }}" alt="Portfolio-title" />
							<div class="mask"></div>
						</div>
					</div>
				</a>
				<div id="portfolio_8" class="white-popup zoom-anim-dialog mfp-hide">
					<img src="{{ asset('f/images/marchites/dash-mediaberbagi.png') }}" alt="Title" />
					<h2>Redesign Dashboard Mediaberbagi ver2</h2>
					<p>Redesign dashboard Mediaberbagi build with Figma</p>
					<a href="#" class="btn btn-default">visit</a>
				</div>
			</div>

		</div>

		<!-- more button -->
		<!-- <div class="load-more text-center mt-4">
			<a href="javascript:" class="btn btn-default"><i class="fas fa-spinner"></i> Load more</a> -->
			<!-- numbered pagination (hidden for infinite scroll) -->
			<!-- <ul class="portfolio-pagination list-inline d-none">
				<li class="list-inline-item">1</li>
				<li class="list-inline-item"><a href="works-2.html">2</a></li>
			</ul>
		</div> -->

	</div>

</section>


<!-- section testimonials -->
<section id="testimonials">

	<div class="container">

		<!-- section title -->
		<h2 class="section-title wow fadeInUp">The Technology</h2>

		<div class="spacer" data-height="60"></div>

		<!-- the technology wrapper -->
		<div class="row">
			<div class="col-md-3 col-6">
				<!-- client item -->
				<div class="client-item">
					<div class="inner">
						<img src="{{ asset('f/images/brand-1.svg') }}" alt="client-name" />
					</div>
				</div>
			</div>
			<div class="col-md-3 col-6">
				<!-- client item -->
				<div class="client-item">
					<div class="inner">
						<img src="{{ asset('f/images/brand-2.svg') }}" alt="client-name" />
					</div>
				</div>
			</div>
			<div class="col-md-3 col-6">
				<!-- client item -->
				<div class="client-item">
					<div class="inner">
						<img src="{{ asset('f/images/brand-3.svg') }}" alt="client-name" />
					</div>
				</div>
			</div>
			<div class="col-md-3 col-6">
				<!-- client item -->
				<div class="client-item">
					<div class="inner">
						<img src="{{ asset('f/images/brand-4.svg') }}" alt="client-name" />
					</div>
				</div>
			</div>
			<div class="col-md-3 col-6">
				<!-- client item -->
				<div class="client-item">
					<div class="inner">
						<img src="{{ asset('f/images/brand-5.svg') }}" alt="client-name" />
					</div>
				</div>
			</div>
			<div class="col-md-3 col-6">
				<!-- client item -->
				<div class="client-item">
					<div class="inner">
						<img src="{{ asset('f/images/brand-6.svg') }}" alt="client-name" />
					</div>
				</div>
			</div>
			<div class="col-md-3 col-6">
				<!-- client item -->
				<div class="client-item">
					<div class="inner">
						<img src="{{ asset('f/images/brand-7.svg') }}" alt="client-name" />
					</div>
				</div>
			</div>
			<div class="col-md-3 col-6">
				<!-- client item -->
				<div class="client-item">
					<div class="inner">
						<img src="{{ asset('f/images/brand-8.svg') }}" alt="client-name" />
					</div>
				</div>
			</div>
			<div class="col-md-3 col-6">
				<!-- client item -->
				<div class="client-item">
					<div class="inner">
						<img src="{{ asset('f/images/brand-9.svg') }}" alt="client-name" />
					</div>
				</div>
			</div><div class="col-md-3 col-6">
				<!-- client item -->
				<div class="client-item">
					<div class="inner">
						<img src="{{ asset('f/images/brand-10.svg') }}" alt="client-name" />
					</div>
				</div>
			</div><div class="col-md-3 col-6">
				<!-- client item -->
				<div class="client-item">
					<div class="inner">
						<img src="{{ asset('f/images/brand-11.svg') }}" alt="client-name" />
					</div>
				</div>
			</div><div class="col-md-3 col-6">
				<!-- client item -->
				<div class="client-item">
					<div class="inner">
						<img src="{{ asset('f/images/brand-12.svg') }}" alt="client-name" />
					</div>
				</div>
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

			<div class="col-md-4">
				<!-- blog item -->
				<div class="blog-item rounded bg-white shadow-dark wow fadeIn">
					<div class="thumb">
						<a href="#">
							<span class="category">Reviews</span>
						</a>
						<a href="#">
							<img src="{{ asset('f/images/blog/1.svg') }}" alt="blog-title" />
						</a>
					</div>
					<div class="details">
						<h4 class="my-0 title"><a href="#">5 Best App Development Tool for Your Project</a></h4>
						<ul class="list-inline meta mb-0 mt-2">
							<li class="list-inline-item">09 February, 2020</li>
							<li class="list-inline-item">Bolby</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<!-- blog item -->
				<div class="blog-item rounded bg-white shadow-dark wow fadeIn">
					<div class="thumb">
						<a href="#">
							<span class="category">Tutorial</span>
						</a>
						<a href="#">
							<img src="{{ asset('f/images/blog/2.svg') }}" alt="blog-title" />
						</a>
					</div>
					<div class="details">
						<h4 class="my-0 title"><a href="#">Common Misconceptions About Payment</a></h4>
						<ul class="list-inline meta mb-0 mt-2">
							<li class="list-inline-item">07 February, 2020</li>
							<li class="list-inline-item">Bolby</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<!-- blog item -->
				<div class="blog-item rounded bg-white shadow-dark wow fadeIn">
					<div class="thumb">
						<a href="#">
							<span class="category">Business</span>
						</a>
						<a href="#">
							<img src="{{ asset('f/images/blog/3.svg') }}" alt="blog-title" />
						</a>
					</div>
					<div class="details">
						<h4 class="my-0 title"><a href="#">3 Things To Know About Startup Business</a></h4>
						<ul class="list-inline meta mb-0 mt-2">
							<li class="list-inline-item">06 February, 2020</li>
							<li class="list-inline-item">Bolby</li>
						</ul>
					</div>
				</div>
			</div>

		</div>

	</div>

</section>
<div class="spacer" data-height="96"></div>
@endsection