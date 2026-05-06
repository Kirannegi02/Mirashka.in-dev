<body class="home theme-creote page-home-default-one">
   <div id="page" class="page_wapper hfeed site">
      <div id="wrapper_full" class="content_all_warpper">
         <!----page-header----->
         <!----preloader----->
         <style>
            /*----==== PREMIUM ELEVATE LOGO PRELOADER ====----*/

            .preloader-wrap.elevate {
               display: flex;
               align-items: center;
               justify-content: center;
            }

            /* clean white luxury background already handled by theme */

            .elevate-loader {
               text-align: center;
            }

            /* Premium logo animation */
            .elevate-logo img {
               width: 100%;
               height: auto;

               opacity: 0;
               transform: scale(0.85);

               animation: elevateLogoPulse 1.4s ease forwards;
               filter: drop-shadow(0 10px 30px rgba(0, 0, 0, 0.08));
            }

            /* subtle premium pulse (MNC feel) */
            @keyframes elevateLogoPulse {
               0% {
                  opacity: 0;
                  transform: scale(0.85);
               }

               50% {
                  opacity: 1;
                  transform: scale(1.02);
               }

               100% {
                  opacity: 1;
                  transform: scale(1);
               }
            }
         </style>
         <div class="preloader-wrap elevate">

            <div class="elevate-loader">

               <div class="elevate-logo">
                  <img src="{{ asset('assets/frontend/img/elevatenew.svg') }}" alt="logo">
               </div>
               <div class="elevate-mini-dots">
                  <span></span><span></span><span></span>
               </div>

            </div>

         </div> <!----preloader end----->
         <!----header----->
         <div class="header_area" id="header_contents">
            <header class="main-header header header_v13">
               <section class="header_top">
                  <div class="medium-container">
                     <div class="header_top_inner">
                        <div class="top_left">
                           <ul class="top-links clearfix">
                              <li>
                                 <a href="https://calendly.com/elevateonemedia/30min"
                                    class="get_a_quote contact-toggler">Book Your 30-Minute Discovery Call
                                 </a>
                              <li>
                              <li>Your Partners in Strategic Growth</li>
                           </ul>
                        </div>
                        <div class="top_right text-right">
                           <ul class="contact_info_two">
                              <li class="single">
                                 <p>
                                    <span class="icon-telephone"></span>
                                    <a href="tel:+918796927200">+91 8796927200</a>
                                 </p>
                              </li>
                              <li class="single">
                                 <p>
                                    <span class="icon-mail"></span>
                                    <a href="mailto:info@mirashka.in">info@mirashka.in</a>
                                 </p>
                              </li>
                              <li class="single">
                                 <p>
                                    <span class="icon-location2"></span>
                                    Sector 117 Noida (U.P.) -201301
                                 </p>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </section>
               <section class="navbar_outer ">
                  <div class="medium-container">
                     <nav class="inner_box">
                        <div class="header_logo_box">
                           <a href="{{ url('/') }}" class="logo navbar-brand">
                              <img src="{{ asset('assets/frontend/img/elevatenew.svg') }}" class="logo_default">
                              <img src="{{ asset('assets/frontend/img/elevatenew.svg') }}" alt="Logo"
                                 class="logo__sticky">
                           </a>
                        </div>
                        <div class="navbar_togglers hamburger_menu">
                           <span class="line"></span>
                           <span class="line"></span>
                           <span class="line"></span>
                        </div>
                        <div class="header_content header_content_collapse">
                           <div class="header_menu_box">
                              <div class="navigation_menu">
                                 <ul id="myNavbar" class="navbar_nav">
                                    <li class="menu-item nav-item active">
                                       <a href="{{ url('/') }}" class="nav-link"><span>Home</span></a>
                                    </li>
                                    @include('frontend.layouts.common.megamenu.who')
                                    <li class="menu-item nav-item active">
                                       <a href="{{ route('whatwedo') }}" class="nav-link"><span>Solutions</span></a>
                                    </li>
                                    @include('frontend.layouts.common.megamenu.services')
                                    @include('frontend.layouts.common.megamenu.industries')
                                    @include('frontend.layouts.common.megamenu.insights')
                                    <li class="menu-item nav-item active">
                                       <a href="{{ route('careers') }}" class="nav-link"><span>Careers</span></a>
                                    </li>
                                    @include('frontend.layouts.common.megamenu.contact')
                                 </ul>
                              </div>
                           </div>
                           <ul class="navbar_right navbar_nav">
                              <li>
                                 <button type="button" class="contact-toggler"><i class="icon-bar"></i></button>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </section>
            </header>
            <!-- end of the loop -->
         </div>
         <!----header end----->