@extends('layout.app')

@section('page-css')

@endsection

@section('content')
    <!-- Services Section Start -->
    <section id="services" class="section-padding">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Our Services</h2>
                <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
            </div>
            <div class="row">
                <!-- Services item -->
                <div class="col-md-6 col-lg-4 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
                        <div class="icon">
                            <i class="lni-cog"></i>
                        </div>
                        <div class="services-content">
                            <h3><a href="#">Easy To Used</a></h3>
                            <p>Ut maximus enim dolor. Aenean auctor risus eget tincidunt lobortis. Donec tincidunt bibendum gravida. </p>
                        </div>
                    </div>
                </div>
                <!-- Services item -->
                <div class="col-md-6 col-lg-4 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
                        <div class="icon">
                            <i class="lni-stats-up"></i>
                        </div>
                        <div class="services-content">
                            <h3><a href="#">Awesome Design</a></h3>
                            <p>Ut maximus enim dolor. Aenean auctor risus eget tincidunt lobortis. Donec tincidunt bibendum gravida. </p>
                        </div>
                    </div>
                </div>
                <!-- Services item -->
                <div class="col-md-6 col-lg-4 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="0.9s">
                        <div class="icon">
                            <i class="lni-users"></i>
                        </div>
                        <div class="services-content">
                            <h3><a href="#">Easy To Customize</a></h3>
                            <p>Ut maximus enim dolor. Aenean auctor risus eget tincidunt lobortis. Donec tincidunt bibendum gravida. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- About Section start -->
    <div class="about-area section-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-2 col-xs-2"></div>
                <div class="col-lg-6 col-md-8 col-xs-8 info" style="text-align: center;">
                    <div class="about-wrapper wow fadeInLeft" data-wow-delay="0.3s">
                        <div>
                            <div class="site-heading">
                                <h2 class="section-title">Detailed Statistics of your Company</h2>
                            </div>
                            <div class="content">
                                <p>
                                    Praesent imperdiet, tellus et euismod euismod, risus lorem euismod erat, at finibus neque odio quis metus. Donec vulputate arcu quam. Morbi quis tincidunt ligula. Sed rutrum tincidunt pretium. Mauris auctor, purus a pulvinar fermentum, odio dui vehicula lorem, nec pharetra justo risus quis mi. Ut ac ex sagittis, viverra nisl vel, rhoncus odio.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12 info">
                    <div class="about-wrapper wow fadeInLeft" data-wow-delay="0.3s">
                        <div>
                            <div class="site-heading">
                                <p class="mb-3">Manage Statistics</p>
                                <h2 class="section-title">Detailed Statistics of your Company</h2>
                            </div>
                            <div class="content">
                                <p>
                                    Praesent imperdiet, tellus et euismod euismod, risus lorem euismod erat, at finibus neque odio quis metus. Donec vulputate arcu quam. Morbi quis tincidunt ligula. Sed rutrum tincidunt pretium. Mauris auctor, purus a pulvinar fermentum, odio dui vehicula lorem, nec pharetra justo risus quis mi. Ut ac ex sagittis, viverra nisl vel, rhoncus odio.
                                </p>
                                <a href="#" class="btn btn-common mt-3">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12 wow fadeInRight" data-wow-delay="0.3s">
                    <img class="img-fluid" src="{{ asset('img/about/img-1.png') }}" alt="" >
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Features Section Start -->
    <section id="features" class="section-padding">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Awesome Features</h2>
                <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="content-left">
                        <div class="box-item wow fadeInLeft" data-wow-delay="0.3s">
                <span class="icon">
                  <i class="lni-rocket"></i>
                </span>
                            <div class="text">
                                <h4>Bootstrap 4 Based</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                        <div class="box-item wow fadeInLeft" data-wow-delay="0.6s">
                <span class="icon">
                  <i class="lni-laptop-phone"></i>
                </span>
                            <div class="text">
                                <h4>Fully Responsive</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                        <div class="box-item wow fadeInLeft" data-wow-delay="0.9s">
                <span class="icon">
                  <i class="lni-cog"></i>
                </span>
                            <div class="text">
                                <h4>HTML5, CSS3 & SASS</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="show-box wow fadeInUp" data-wow-delay="0.3s">
                        <img src="{{ asset('img/feature/intro-mobile.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="content-right">
                        <div class="box-item wow fadeInRight" data-wow-delay="0.3s">
                <span class="icon">
                  <i class="lni-leaf"></i>
                </span>
                            <div class="text">
                                <h4>Modern Design</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                            </div>
                        </div>
                        <div class="box-item wow fadeInRight" data-wow-delay="0.6s">
                <span class="icon">
                  <i class="lni-layers"></i>
                </span>
                            <div class="text">
                                <h4>Multi-purpose Template</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                        <div class="box-item wow fadeInRight" data-wow-delay="0.9s">
                <span class="icon">
                  <i class="lni-leaf"></i>
                </span>
                            <div class="text">
                                <h4>Working Contact Form</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Section End -->

@endsection

@section('page-js')

@endsection
