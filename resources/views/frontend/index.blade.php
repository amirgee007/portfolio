@extends('frontend.partials.base')
@section('content')

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Services</h2>
                    <h3 class="section-subheading text-muted">Expand your mind, change your world.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-print fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">PHP</h4>
                    <p class="text-muted">
                        PHP (recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open source general-purpose scripting language that is especially suited for web devs and can be embedded into HTML.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-danger"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">LARAVEL FRAMEWORK</h4>
                    <p class="text-muted">Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model,view,controller (MVC) architectural pattern.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-file-text-o fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">CODEIGNITER</h4>
                    <p class="text-muted">CodeIgniter is a powerful PHP framework with a very small footprint, built for developers who need a simple and elegant toolkit to create full-featured web applications.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Portfolio</h2>
                    <h3 class="section-subheading text-muted">Quality is remembered long after the price is forgotten.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/socksmain.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Say It sock</h4>
                        <p class="text-muted">Website Maintenance </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/jobseeker.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Cyprus Job Market</h4>
                        <p class="text-muted">Website Update in laravel</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/sage.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Sage Property</h4>
                        <p class="text-muted">Website Development</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">Your vision, our future.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/zeexal.png" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2013-2014</h4>
                                    <h4 class="subheading"> <a href="http://zeexal.com/">Zeexal.com</a></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">we have an experience of 2+ years in website development .We will only accept if We feel that We can make you satisfy about our delivery of your product request.We love to learn and explore new things.
                                        W always try to deliver a good quality product in a short period of time and our first priority to satisfy you!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/codeigniter.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2013-15</h4>
                                    <h4 class="subheading"><a href="http://pixiders.com/">pixiders.com</a></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">
                                        We are skilled and professional web application developer with the experience of more than 2 years. We have developed and deployed many web application in codeigniter for back-end and AngularJs/bootstrap for front-end. With the combination of these two frameworks we develop full stack enterprises web applications.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/laravel.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2015-2017</h4>
                                    <h4 class="subheading"><a href="http://codebrisk.com/">codebrisk.com</a></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">We're IT Pro well-equipped with sound knowledge and passion for software development & web development Looking forward to work in a professional. We use github, gitlab and bitbucket for version control system. Implement complex business logic to make the things possible in more efficient and elegant manner.!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/company.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>January 2017</h4>
                                    <h4 class="subheading">An Agency is Born</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">

                                        SeerSol Inc is a Pakistan based web application development company providing a wide range of web development solutions locally as well as all over the world. We pride in providing innovative and unique web application development solutions to all your business needs.You just need to think and we develop.
                                        </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">None of us is as smart as all of us.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/hadi.jpg" class="img-responsive img-circle" alt="">
                        <h4>Hammad Hassan</h4>
                        <p class="text-muted">CEO</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://web.facebook.com/hamad.hasan.526"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/amir.jpg" class="img-responsive img-circle" alt="">
                        <h4>M Amir Shahzad</h4>
                        <p class="text-muted">CTO</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://web.facebook.com/amirgee007"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">We do Website development, Responsive Bootstrap Based Sites development, designing or back-end functionality fixes mostly any task of HTML, CSS, JQuery, PHP, MySQL.

                        Also have an experienced of CodeIgniter and laravel also love to learn new things.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Aside -->
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="http://portal.sayitwithasock.com/admin" target="_blank">
                        <img src="img/logos/sock.png"  class="img-responsive img-centered" style="height: 50px;" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="http://uetac.com/" target="_blank">
                        <img src="img/logos/uet.png" class="img-responsive img-centered" style="height: 50px;" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="http://www.almuhammadlinks.com" target="_blank">
                        <img src="img/logos/almuhammad.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="http://ashleysleepelite.com/" target="_blank">
                        <img src="img/logos/ash.png" class="img-responsive img-centered"  style="height: 50px;"  alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted" style="color: #fff;">We’re friendly and available to chat. Reach out to us anytime and we’ll happily answer your questions.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    {{--<form name="sentMessage" method="post" id="contactForm" novalidate>--}}
                        <form method="post" action="{{route('email.send')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" name="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email"  name="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" name="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" name="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
