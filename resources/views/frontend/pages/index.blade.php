<?php
use Carbon\Carbon;
use Illuminate\Support\Str;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/fontawesome.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/frontend/assets/css/ajax.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="icon" sizes="180x180" href="{{asset('assets/frontend/uploads/180.png')}}" type="image/jpeg" >
    <title>Ayaan Tech</title>
</head>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/61ed13dcb9e4e21181bb6736/1fq31b67i';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<body>
    <section id="top-header">
        <div class="content d-flex justify-content-between">
            <div class="top-header-right"  data-aos="fade-right"  data-aos-duration="1500">
                <ul>
                    <li><a href="https://www.facebook.com/search/top?q=ayaan%20tech%20limited" target="blank"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCfHg6yMJ967P4ei_JxW--jw" target="blank"><i class="fab fa-youtube-square"></i></a></li>
                    <li><a href="https://www.linkedin.com/mwlite/company/ayaan-tech-limited" target="blank"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href=""><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
            <div class="top-header-left" data-aos="fade-left"  data-aos-duration="1500">
                <ul>
                    <li><a href=""><i class="fas fa-envelope"></i>&nbsp; &nbsp;connect@ayaantech.com.bd</a></li>
                    <li><a  href=""><i class="fas fa-phone-volume"></i>&nbsp; &nbsp;+88 01973198574</a></li>
                    <li><a href=""><i class="fas fa-map-marker-alt"></i> &nbsp; &nbsp;Dhaka Bangladesh</a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="navigation">
        <nav>
            <div class="wrapper content">
              <div class="logo"><a href="#"><img style="height: 65px; width: 100%;" src="{{asset('assets/frontend/uploads/logo.png')}}" alt="" srcset=""></a></div>
              <input type="radio" name="slider" id="menu-btn">
              <input type="radio" name="slider" id="close-btn">
              <ul class="nav-links">
                <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
                <li><a href="#">Home</a></li>
                <li><a href="#service">Services</a></li>
                <li>
                  <a href="#packages" class="desktop-item">Packages</a>
                  <input type="checkbox" id="showDrop">
                  <label for="showDrop" class="mobile-item">Packages</label>
                  <ul class="drop-menu">
                    <li><a href="#social">Social Media Managemnt</a></li>
                    <li><a href="#website">Website Maintenance</a></li>
                    <!--<li><a href="#digital">Digital Marketing</a></li>-->
                  </ul>
                </li>
                <li><a href="#blog">Products</a></li>
                <li><a href="#about-us">About Us</a></li>
                <li><a href="#news">News & Blogs</a></li>
                <li><a href="#contact">Contact Us</a></li>
              </ul>
              <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
            </div>
          </nav>
    </section>
    <section id="slider">
        <div class="heading"></div>
        <div class="swiper-container" data-aos="zoom-out-up" data-aos-duration="1500">
            <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="container-general">
                <div class="gallery-wrap wrap-effect-2">
                    <div class="item" style="background-image: url('{{asset('assets/frontend/uploads/change-M.png')}}');"></div>
                    <div class="item" style="background-image: url('{{asset('assets/frontend/uploads/cartoon.png')}}');"></div>
                    <div class="item" style="background-image: url('{{asset('assets/frontend/uploads/android-boot-animation.gif')}}');"></div>
                    <div class="item" style="background-image: url('{{asset('assets/frontend/uploads/dribble.gif')}}')"></div>
                    <div class="item" style="background-image: url('{{asset('assets/frontend/uploads/website.jpg')}}');"></div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <section id="service">
        <div class="services content">
            <div class="container-fluid">
                <div class="service-title d-flex justify-content-between">
                    <div class="service-title-header">
                        <h2 style="color: #fff;">Services</h2>
                    </div>
                    <div class="view-all">
                        View all
                    </div>
                </div>
                <div class="row" data-aos="zoom-in-down" data-aos-duration="1500">
                    @foreach ($services as $key=>$service)
                        <div class="col-md-3 col-lg-3 mb-3">
                            <div class="box p-5">
                                @if ($key==0)
                                <i style="color: #21256B;"  class="far fa-window-restore fa-5x mb-4"></i>
                                @elseif($key==1)
                                <i style="color: #21256B;" class="fab fa-centos fa-5x mb-4"></i>
                                @elseif($key==2)
                                <i style="color: #21256B;" class="fab fa-android  fa-5x mb-4"></i>
                                @elseif($key==3)
                                <i style="color: #21256B;" class="far fa-images fa-5x mb-4"></i>
                                @elseif($key==4)
                                <i style="color: #21256B;" class="fab fa-unity fa-5x mb-4"></i>
                                @elseif($key==5)
                                <i style="color: #21256B;" class="fas fa-chart-bar fa-5x mb-4"></i>
                                @elseif($key==6)
                                <i style="color: #21256B;" class="fas fa-search-plus fa-4x mb-4"></i>
                                @elseif($key==7)
                                <i style="color: #21256B;" class="fas fa-video fa-5x mb-4"></i>
                                @endif
                                <h4>{{$service->name}}</h4>
                                <p>{{$service->details}}</p>
                                <a class="readmore" href="{{url('/single-details')}}"><span>Read More</span></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section id="about-us">
        <div class="about content">
            <div class="upper">
              <div class="logo">
                <div class="image">
                  <div class="camp">
                    <img src="{{asset('assets/frontend/uploads/24-7-mobile.gif')}}" alt="Image" id="tent" />
                  </div>
                </div>
              </div>
              <div class="info">
                <h1 class="mb-3">ABOUT <span style="color: rgb(241, 148, 8);">ALT</span></h1>
                <p>{{$about->details}}</p>
                <button class="btn my-2" style="color: #21256B;" ><b>See More</b></button>
              </div>
            </div>
          </div>
    </section>
    <section class="section gray-bg mt-5" id="blog">
        <div class="container-fluid content">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title mb-4">
                        <h1 style="color: #000; font: 2 rem; font-weight: 600;">OUR PRODUCTS</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="blog-grid">
                        <div class="blog-img">
                            <div class="date">AVAILABLE</div>
                            <a href="./a-z.html">
                                <img style="height: 300px !important;" src="{{asset('assets/frontend/uploads/graphic-designer-vector.png')}}" title="" alt="">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h5><a href="./a-z.html">Create A-Z</a></h5>
                            <p>Create A-Z is an app where you can create and manage all kind ..</p>
                            <div class="btn-bar">
                                <a href="./a-z.html" class="px-btn-arrow">
                                    <span>Enquiry Now</span>
                                    <i class="arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="blog-grid">
                        <div class="blog-img">
                            <div class="date">AVAILABLE</div>
                            <a href="./erp.html">
                                <img src="{{asset('assets/frontend/uploads/erpsm.jpg')}}" title="" alt="">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h5><a href="./erp.html">Ayaan Tech ERP</a></h5>
                            <p>Enterprise Management System where you can manage...</p>
                            <div class="btn-bar">
                                <a href="./erp.html" class="px-btn-arrow">
                                    <span>Enquiry Now</span>
                                    <i class="arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="blog-grid">
                        <div class="blog-img">
                            <div class="date">AVAILABLE</div>
                            <a href="./school.html">
                                <img src="{{asset('assets/frontend/uploads/school.jpg')}}" title="" alt="">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h5><a href="./school.html">School Management</a></h5>
                            <p>You can manage  students stuffs salary exams absence through this app</p>
                            <!-- <p>Complete E-learning solution multiple tasks system maintinace.</p> -->
                            <div class="btn-bar">
                                <a href="#contact" class="px-btn-arrow">
                                    <span>Enquiry Now</span>
                                    <i class="arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="blog-grid">
                        <div class="blog-img">
                            <div class="date">AVAILABLE</div>
                            <a href="#">
                                <img src="{{asset('assets/frontend/uploads/1.jpg')}}" title="" alt="">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h5><a href="./currier.html">Currier Management</a></h5>
                            <p>Ecommerce is growing at a rapid pace, and it’s making parcel..</p>
                            <div class="btn-bar">
                                <a href="./currier.html" class="px-btn-arrow">
                                    <span>Enquiry Now</span>
                                    <i class="arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="blog-grid">
                        <div class="blog-img">
                            <div class="date">AVAILABLE</div>
                            <a href="./super.html">
                                <img src="{{asset('assets/frontend/uploads/supermarket.jpg')}}" title="" alt="">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h5><a href="#">Grocery Management</a></h5>
                            <p>Are you looking for a Grocery management system project?...</p>
                            <div class="btn-bar">
                                <a href="./super.html" class="px-btn-arrow">
                                    <span>Enquiry Now</span>
                                    <i class="arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="blog-grid">
                        <div class="blog-img">
                            <div class="date">AVAILABLE</div>
                            <a href="./office.html">
                                <img src="{{asset('assets/frontend/uploads/officejpg.jpg')}}" title="" alt="">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h5><a href="./office.html">Office Management</a></h5>
                            <p>Office management involves the planning, design, implementation of work in...</p>
                            <div class="btn-bar">
                                <a href="#contact" class="px-btn-arrow">
                                    <span>Enquiry Now</span>
                                    <i class="arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="blog-grid">
                        <div class="blog-img">
                            <div class="date">AVAILABLE</div>
                            <a href="./resturent.html">
                                <img src="{{asset('assets/frontend/uploads/resturentmini.png')}}" title="" alt="">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h5><a href="./resturent.html">Restaurent(POS) </a></h5>
                            <p>Point of sell management system. You can manage your every action of your POS institute.</p>
                            <div class="btn-bar">
                                <a href="#contact" class="px-btn-arrow">
                                    <span>Enquiry Now</span>
                                    <i class="arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="blog-grid">
                        <div class="blog-img">
                            <div class="date">AVAILABLE</div>
                            <a href="./pharmacy.html">
                                <img src="{{asset('assets/frontend/uploads/pharmacy.jpg')}}" title="" alt="">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h5><a href="./pharmacy.html">Pharmacy Management</a></h5>
                            <p>you can  management and utilise  every pharmacy issues through this app.</p>
                            <div class="btn-bar">
                                <a href="#" class="px-btn-arrow">
                                    <span>Enquiry Now</span>
                                    <i class="arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 moretext">
                    <div class="blog-grid">
                        <div class="blog-img">
                            <div class="date">AVAILABLE</div>
                            <a href="./dental.html">
                                <img style="height: 300px !important;" src="https://image.freepik.com/free-vector/patient-sitting-medical-chair-during-visit-treatment-isolated-flat-vector-illustration-cartoon-dentist-working-diagnostic-cabinet-stomatology-dental-clinic-concept_74855-13192.jpg" title="" alt="">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h5><a href="./dental.html">Dental Management</a></h5>
                            <p>Dental Clinic Management System (DCMS) The Dental Clinic Management System</p>
                            <div class="btn-bar">
                                <a href="./dental.html" class="px-btn-arrow">
                                    <span>Enquiry Now</span>
                                    <i class="arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 moretext">
                    <div class="blog-grid">
                        <div class="blog-img">
                            <div class="date">AVAILABLE</div>
                            <a href="./invoice.html">
                                <img src="https://st2.depositphotos.com/5240153/8235/v/600/depositphotos_82354972-stock-illustration-online-digital-invoices.jpg" title="" alt="">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h5><a href="./invoice.html">ALT Invoice</a></h5>
                            <p>Ayaan tech invoce where you can create and custom invoice.</p>
                            <div class="btn-bar">
                                <a href="./invoice.html" class="px-btn-arrow">
                                    <span>Enquiry Now</span>
                                    <i class="arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 moretext">
                    <div class="blog-grid">
                        <div class="blog-img">
                            <div class="date">AVAILABLE</div>
                            <a href="./bot.html">
                                <img src="https://www.freevector.com/uploads/vector/preview/27106/Smart-Chatbots.jpg" title="" alt="">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h5><a href="./bot.bot">Chat Bot</a></h5>
                            <p>ayaan tech limited provide chat bot ...</p>
                            <div class="btn-bar">
                                <a href="./bot.html" class="px-btn-arrow">
                                    <span>Enquiry Now</span>
                                    <i class="arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 moretext">
                    <div class="blog-grid">
                        <div class="blog-img">
                            <div class="date">AVAILABLE</div>
                            <a href="./cart.html">
                                <img src="{{asset('assets/frontend/uploads/1.jpg')}}" title="" alt="">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h5><a href="./cart.html">E-COM Shopping cart</a></h5>
                            <p>Ayaan tech limited has shopping cart system...</p>
                            <div class="btn-bar">
                                <a href="./cart.html" class="px-btn-arrow">
                                    <span>Enquiry Now</span>
                                    <i class="arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 moretext">
                    <div class="blog-grid">
                        <div class="blog-img">
                            <div class="date">AVAILABLE</div>
                            <a href="./super.html">
                                <img src="https://previews.123rf.com/images/skypicsstudio/skypicsstudio1911/skypicsstudio191100345/134522420-coaching-vector-concept-for-web-banner-website-page.jpg" title="" alt="">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h5><a href="#">Coaching Management</a></h5>
                            <p>Coaching Management system is a management system where...</p>
                            <div class="btn-bar">
                                <a href="./super.html" class="px-btn-arrow">
                                    <span>Enquiry Now</span>
                                    <i class="arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 moretext">
                    <div class="blog-grid">
                        <div class="blog-img">
                            <div class="date">AVAILABLE</div>
                            <a href="./hr.html">
                                <img src="https://thumbs.dreamstime.com/b/human-resources-design-graphic-vector-illustration-eps-64582503.jpg" title="" alt="">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h5><a href="./hr.html">HR Management</a></h5>
                            <p>Humen resource management system can controll humen...</p>
                            <div class="btn-bar">
                                <a href="./hr.html" class="px-btn-arrow">
                                    <span>Enquiry Now</span>
                                    <i class="arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 moretext">
                    <div class="blog-grid">
                        <div class="blog-img">
                            <div class="date">AVAILABLE</div>
                            <a href="#">
                                <img src="{{asset('assets/frontend/uploads/istock2.jpg')}}" title="" alt="">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h5><a href="#">POS Management</a></h5>
                            <p>Point of sell management system. You can manage your every action of your.</p>
                            <div class="btn-bar">
                                <a href="#" class="px-btn-arrow">
                                    <span>Enquiry Now</span>
                                    <i class="arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 moretext">
                    <div class="blog-grid">
                        <div class="blog-img">
                            <div class="date">AVAILABLE</div>
                            <a href="./resturent.html">
                                <img src="https://img.freepik.com/free-vector/people-cozy-cafe-coffee-shop-interior-customers-waitress-vector-illustration_169479-422.jpg?size=626&ext=jpg" title="" alt="">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h5><a href="./resturent.html">Restaurant Management</a></h5>
                            <p>you can  management and utilise  every restaurant issue through this app.</p>
                            <div class="btn-bar">
                                <a href="#contact" class="px-btn-arrow">
                                    <span>Enquiry Now</span>
                                    <i class="arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 moretext">
                    <div class="blog-grid">
                        <div class="blog-img">
                            <div class="date">AVAILABLE</div>
                            <a href="#">
                                <img src="https://img.freepik.com/free-vector/money-bag_16734-108.jpg?size=338&ext=jpg" title="" alt="">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h5><a href="./currier.html">Micro Credit Management</a></h5>
                            <p>Micro Credit managemnt system can manage your </p>
                            <div class="btn-bar">
                                <a href="./currier.html" class="px-btn-arrow">
                                    <span>Enquiry Now</span>
                                    <i class="arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 moretext">
                    <div class="blog-grid">
                        <div class="blog-img">
                            <div class="date">AVAILABLE</div>
                            <a href="./super.html">
                                <img src="https://media.istockphoto.com/vectors/organization-of-data-on-work-with-clients-customer-relationship-crm-vector-id962273384?k=20&m=962273384&s=612x612&w=0&h=LYexnd0w8Io89yaEU1_KmoDJTw15CO4m6mR2BVuvJSw=" title="" alt="">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h5><a href="#">CRM System</a></h5>
                            <p>We have complete CRM system ...</p>
                            <div class="btn-bar">
                                <a href="./super.html" class="px-btn-arrow">
                                    <span>Enquiry Now</span>
                                    <i class="arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 moretext">
                    <div class="blog-grid">
                        <div class="blog-img">
                            <div class="date">AVAILABLE</div>
                            <a href="#">
                                <img src="https://static.vecteezy.com/system/resources/thumbnails/001/879/472/small/marketplace-platform-for-selling-with-smartphone-create-shop-or-business-with-a-mobile-system-online-internet-promotion-flat-illustration-for-landing-page-web-website-banner-mobile-apps-free-vector.jpg" title="" alt="">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h5><a href="#">Sells  ERP</a></h5>
                            <p>Sells erm system can manage your sells documents and records...</p>
                            <div class="btn-bar">
                                <a href="./office.html" class="px-btn-arrow">
                                    <span>Enquiry Now</span>
                                    <i class="arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 moretext">
                    <div class="blog-grid">
                        <div class="blog-img">
                            <div class="date">AVAILABLE</div>
                            <a href="#">
                                <img src="https://www.kindpng.com/picc/m/757-7573704_social-media-vector-png-transparent-png.png" title="" alt="">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h5><a href="#">Social Media</a></h5>
                            <p>You can build your own media...</p>
                            <div class="btn-bar">
                                <a href="./office.html" class="px-btn-arrow">
                                    <span>Enquiry Now</span>
                                    <i class="arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="moreless-button" style="color:blue; text-align: end;" href="#blog">View all</a>
        </div>
    </section>
    <section id="website">
        <div class="packages content">
            <div class="container-fluid">
                <div class="service-title d-flex justify-content-between">
                    <div class="service-title-header">
                        <h2 style="color: #fff;">WEBSITE DESIGN AND DEVELOPMENT PACKAGES</h2>
                    </div>
                </div>
                <div id="generic_price_table">   
                    <section>
                        <div class="container">
                            <div class="row" id="show-more-item">
                              <div class="col-md-3" style="color: #21256B;">
                                <div class="generic_content clearfix">
                                    <div class="generic_head_price clearfix">
                                        <div class="generic_head_content clearfix">
                                            <div class="head_bg"></div>
                                            <div class="head">
                                                <span>Portfolio</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="generic_feature_list">
                                        <ul>
                                            <li> 2-3 pages.</li>
                                            <li> Dynamic and .</li>
                                            <li><span></span>Lifetime support</li>
                                            <li><span></span>Free Domain + Hosting</li>
                                            <li><span></span> Cpanel free SSL</li>
                                        </ul>
                                    </div>
                                    <div class="generic_price_btn clearfix">
                                        <a class="" href="#contact">Enroll Now</a>
                                    </div>
                                </div>
                              </div>
                              <div class="col-md-3" style="color: #21256B;">
                                <div class="generic_content clearfix">
                                    <div class="generic_head_price clearfix">
                                        <div class="generic_head_content clearfix">
                                            <div class="head_bg"></div>
                                            <div class="head">
                                                <span>Startup</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="generic_feature_list">
                                       <ul>
                                            <li> 10+ pages with slider</li>
                                            <li> Dynamic content.</li>
                                            <li><span></span>Lifetime support</li>
                                            <li><span></span>Free Domain + Hosting</li>
                                            <li><span></span> Cpanel free SSL</li>
                                        </ul>
                                    </div>
                                    <div class="generic_price_btn clearfix">
                                        <a class="" href="#contact">Enroll Now</a>
                                    </div>
                                </div>
                              </div>
                              <div class="col-md-3" style="color: #21256B;">
                                <div class="generic_content clearfix">
                                    <div class="generic_head_price clearfix">
                                        <div class="generic_head_content clearfix">
                                            <div class="head_bg"></div>
                                            <div class="head">
                                                <span>Enterprise</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="generic_feature_list">
                                       <ul>
                                            <li> 15+ pages with slider</li>
                                            <li> Dynamic content & design.</li>
                                            <li><span></span>Lifetime support</li>
                                            <li><span></span>Free Domain + Hosting</li>
                                            <li><span></span> 24/7 Customer support</li>
                                        </ul>
                                    </div>
                                    <div class="generic_price_btn clearfix">
                                        <a class="" href="#contact">Enroll Now</a>
                                    </div>
                                </div>
                              </div>
                              <div class="col-md-3" style="color: #21256B;">
                                <div class="generic_content clearfix">
                                    <div class="generic_head_price clearfix">
                                        <div class="generic_head_content clearfix">
                                            <div class="head_bg"></div>
                                            <div class="head">
                                                <span>Multitasking</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="generic_feature_list">
                                         <ul>
                                            <li> Dynamic page creation</li>
                                            <li> Slution system</li>
                                            <li><span></span>Lifetime support</li>
                                            <li><span></span>Free Domain + Hosting</li>
                                            <li><span></span> 24/7 Customer support</li>
                                        </ul>
                                    </div>
                                    <div class="generic_price_btn clearfix">
                                        <a class="" href="#contact">Enroll Now</a>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </section> 
                </div>
            </div>
        </div>
    </section>
    <section id="social">
        <div class="packages content">
            <div class="container-fluid">
                <div class="service-title d-flex justify-content-between">
                    <div class="service-title-header">
                        <h2 style="color: #fff;">SOCIAL MEDIA MANAGEMENTS </h2>
                    </div>
                </div>
                <div id="generic_price_table">   
                    <section>
                        <div class="container ">
                            <div class="row m-auto" id="show-more-item">
                              <div class="col-md-3" style="color: #21256B;">
                                <div class="generic_content clearfix">
                                    <div class="generic_head_price clearfix">
                                        <div class="generic_head_content clearfix">
                                            <div class="head_bg"></div>
                                            <div class="head">
                                                <span>package 1</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="generic_feature_list">
                                        <ul>
                                            <li><span>10</span> Posts in Social Media</li>
                                            <li><span>10</span> Promotion Banner</li>
                                            <li><span>+</span> Bonus post on festival</li>
                                            <li><span>2</span> Adds Design</li>
                                            <li><span>24/7</span> Support</li>
                                        </ul>
                                    </div>
                                    <div class="generic_price_btn clearfix">
                                        <a class="" href="#contact">Enroll Now</a>
                                    </div>
                                </div>
                              </div>
                              <div class="col-md-3" style="color: #21256B;">
                                <div class="generic_content clearfix">
                                    <div class="generic_head_price clearfix">
                                        <div class="generic_head_content clearfix">
                                            <div class="head_bg"></div>
                                            <div class="head">
                                                <span>package 2</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="generic_feature_list">
                                        <ul>
                                            <li><span>15</span> Posts in Social Media</li>
                                            <li><span>15</span> Promotion Banner</li>
                                            <li><span>++</span> Bonus post on festival</li>
                                            <li><span>2</span> Adds Design</li>
                                            <li><span>24/7</span> Support</li>
                                        </ul>
                                    </div>
                                    <div class="generic_price_btn clearfix">
                                        <a class="" href="#contact">Enroll Now</a>
                                    </div>
                                </div>
                              </div>
                              <div class="col-md-3" style="color: #21256B;">
                                <div class="generic_content clearfix">
                                    <div class="generic_head_price clearfix">
                                        <div class="generic_head_content clearfix">
                                            <div class="head_bg"></div>
                                            <div class="head">
                                                <span>package 3</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="generic_feature_list">
                                        <ul>
                                            <li><span>20</span> Posts in Social Media</li>
                                            <li><span>20</span> Promotion Banner</li>
                                            <li><span>2x</span> Bonus post on festival</li>
                                            <li><span>5</span> Adds Design</li>
                                            <li><span>24/7</span> 1 customer support</li>
                                        </ul>
                                    </div>
                                    <div class="generic_price_btn clearfix">
                                        <a class="" href="#contact">Enroll Now</a>
                                    </div>
                                </div>
                              </div>
                              
                            </div>
                        </div>
                    </section> 
                </div>
            </div>
        </div>
    </section>
    <section id="news">
        <section class="home-blog bg-sand">
            <div class="container-fluid content">
                <div class="row justify-content-md-center">
                    <div class="col-xl-5 col-lg- col-md-8">
                        <div class="section-title text-center title-ex1">
                            <h2>NEWS & BLOG</h2>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    @foreach ($newses as $key=>$news)
                    <div class="col-md-4">
                        <div class="media blog-media">
                            @if ($key==0)
                            <a href="blog-post-left-sidebar.html"><img class="d-flex" src="{{asset('assets/frontend/uploads/school1jpg.jpg')}}" alt="Generic placeholder image"></a>
                                @elseif($key==1)
                                <a href="blog-post-left-sidebar.html"><img class="d-flex" src="{{asset('assets/frontend/uploads/school1jpg.jpg')}}" alt="Generic placeholder image"></a>
                                @elseif($key==2)
                                <a href="blog-post-left-sidebar.html"><img class="d-flex" src="{{asset('assets/frontend/uploads/hospital.jpg')}}" alt="Generic placeholder image"></a>
                                @elseif($key==3)
                                <a href="blog-post-left-sidebar.html"><img class="d-flex" src="{{asset('assets/frontend/uploads/supermarket1.jpg')}}" alt="Generic placeholder image"></a>
                                @elseif($key==4)
                                <a href="blog-post-left-sidebar.html"><img class="d-flex" src="{{asset('assets/frontend/uploads/pharma.jpg')}}" alt="Generic placeholder image"></a>
                                @elseif($key==5)
                                <a href="blog-post-left-sidebar.html"><img class="d-flex" src="{{asset('assets/frontend/uploads/photo-.jpg')}}" alt="Generic placeholder image"></a>
                                @endif
                          <div class="media-body">
                            <a href=""><h5 class="mt-0">{{$news['title']}}</h5></a>
                            {{Str::limit($news['details']),50}}
                            <a href="{{url('/single-details')}}" class="post-link">Read More->></a>
                          </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </section>
    <section id="contact">
    <form class="my-form pt-5 pb-5">
        <div class="container">
            <h1>Get in touch!</h1>
            <p class="my-4">If you have any work from me or any types of quries related to my institute, you can send me message from here. It's my pleasure to help you.</p>
            <ul>
            <li>
                <div class="grid grid-2">
                <input type="text" placeholder="Name" required>  
                <input type="text" placeholder="Organization Name" required>
                </div>
            </li>
            <li>
                <div class="grid grid-2">
                <input type="email" placeholder="Email" required>
                <input type="phone" placeholder="Enter Mobile Number " required>
                
                <input type="tel" placeholder="Phone">
                </div>
            </li>    
            <li>
                <textarea placeholder="Message"></textarea>
            </li>   
            <li>
                <input type="checkbox" id="terms">
                <label for="terms">To submit your massage. <a href="">Click the check box.</a></label>
            </li>  
            <li>
                <div class="grid grid-3">
                <div class="required-msg">REQUIRED FIELDS</div>
                <button class="btn-grid" type="submit" disabled>
                    <span class="back">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/email-icon.svg" alt="">
                    </span>
                    <span class="front">SUBMIT</span>
                </button>
                <button class="btn-grid" type="reset" disabled>
                    <span class="back">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/eraser-icon.svg" alt="">
                    </span>
                    <span class="front">RESET</span>
                </button> 
                </div>
            </li>    
            </ul>
        </div>
        </form>
    </section>
    <section id="footer">
        <footer class="new_footer_area bg_color">
            <div class="new_footer_top">
                <div class="container-fluid content">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Download</h3>
                                <ul class="list-unstyled f_list">
                                    <li><a href="#">Company</a></li>
                                    <li><a href="#">Android App</a></li>
                                    <li><a href="#">ios App</a></li>
                                    <li><a href="#">Desktop</a></li>
                                    <li><a href="#">Projects</a></li>
                                    <li><a href="#">My tasks</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Help</h3>
                                <ul class="list-unstyled f_list">
                                    <li><a href="./terms.html">FAQ</a></li>
                                    <li><a href="./terms.html">Term &amp; conditions</a></li>
                                    <li><a href="./terms.html">Privacy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Team Solutions</h3>
                                <div style="width: 150px padding-bottom:20px; margin-bottom:20px" class="f_social_icon">
                                    <a href="https://www.facebook.com/search/top?q=ayaan%20tech%20limited" target="blank"class="fab fa-facebook"></a>
                                    <a href="https://www.youtube.com/channel/UCfHg6yMJ967P4ei_JxW--jw" target="blank" class="fab fa-twitter"></a>
                                    <a href="https://www.linkedin.com/mwlite/company/ayaan-tech-limited" target="blank" class="fab fa-linkedin"></a>
                                    <a href="#" class="fab fa-pinterest"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Get in Touch</h3>
                                <p>Don’t miss any updates of our new templates and extensions.!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_bg">
                    <div class="footer_bg_one"></div>
                    <div class="footer_bg_two"></div>
                </div>
            </div>
        </footer>
    </section>
   
    <script src="{{asset('assets/frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/script.js')}}"></script>
    <script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/fontawesome.js')}}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        
    </script>
    <script>
       const checkbox = document.querySelector('.my-form input[type="checkbox"]');
        const btns = document.querySelectorAll(".my-form button");

        checkbox.addEventListener("change", function() {
        const checked = this.checked;
        for (const btn of btns) {
            checked ? (btn.disabled = false) : (btn.disabled = true);
        }
        });
    </script>
   <script>
       $('.moreless-button').click(function() {
        $('.moretext').slideToggle();
        if ($('.moreless-button').text() == "View all") {
            $(this).text("Hide")
        } else {
            $(this).text("View all")
        }
        });
    </script>
    
   
</body>
</html>