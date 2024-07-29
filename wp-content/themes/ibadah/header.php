<?php
/**
 *The header templete for our theme
 * @package ibadah
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes();?>" class="no-js" lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" <?php bloginfo("pingback_url");?> >
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ibadah - Home 1</title>
    <link rel="icon" href="assets/img/favicon.png">
    <!-- CSS only -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/owl.theme.default.min.css">
    <!-- fancybox -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/nice-select.css">
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/audioplayer.css">
    <!-- style -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.css">
    <!-- responsive -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/responsive.css">
    <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/preloader.js"></script>

    <?php wp_head(); ?>
</head>

<body>
    <!-- preloader -->
    <div class="preloader">
        <div class="loader">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>
    <!-- preloader end -->
    <!-- header -->
    <header>
        <div class="container">
            <div class="top-bar">
                <div class="row align-items-center">
                    <div class="col-xl-5">
                        <div class="d-flex align-items-center">
                            <div class="content-header me-5">
                                <i>
                                    <svg width="800px" height="800px" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12" cy="12" r="5" stroke="#fbc50b" stroke-width="1.5" />
                                        <path d="M12 2V4" stroke="#fbc50b" stroke-width="1.5" stroke-linecap="round" />
                                        <path d="M12 20V22" stroke="#fbc50b" stroke-width="1.5"
                                            stroke-linecap="round" />
                                        <path d="M4 12L2 12" stroke="#fbc50b" stroke-width="1.5"
                                            stroke-linecap="round" />
                                        <path d="M22 12L20 12" stroke="#fbc50b" stroke-width="1.5"
                                            stroke-linecap="round" />
                                        <path d="M19.7778 4.22266L17.5558 6.25424" stroke="#fbc50b" stroke-width="1.5"
                                            stroke-linecap="round" />
                                        <path d="M4.22217 4.22266L6.44418 6.25424" stroke="#fbc50b" stroke-width="1.5"
                                            stroke-linecap="round" />
                                        <path d="M6.44434 17.5557L4.22211 19.7779" stroke="#fbc50b" stroke-width="1.5"
                                            stroke-linecap="round" />
                                        <path d="M19.7778 19.7773L17.5558 17.5551" stroke="#fbc50b" stroke-width="1.5"
                                            stroke-linecap="round" />
                                    </svg>
                                </i>
                                <h4>Sunrise At<b>: 4:44 AM</b></h4>
                            </div>
                            <div class="content-header me-5">
                                <i>
                                    <svg width="800px" height="800px" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M20.3655 2.12433C20.0384 1.29189 18.8624 1.29189 18.5353 2.12433L18.1073 3.21354L17.0227 3.6429C16.1933 3.97121 16.1933 5.14713 17.0227 5.47544L18.1073 5.90481L18.5353 6.99401C18.8624 7.82645 20.0384 7.82646 20.3655 6.99402L20.7935 5.90481L21.8781 5.47544C22.7075 5.14714 22.7075 3.97121 21.8781 3.6429L20.7935 3.21354L20.3655 2.12433ZM19.4504 2.52989L19.8651 3.58533C19.9648 3.83891 20.165 4.04027 20.4188 4.14073L21.4759 4.55917L20.4188 4.97762C20.165 5.07808 19.9648 5.27943 19.8651 5.53301L19.4504 6.58846L19.0357 5.53301C18.936 5.27943 18.7358 5.07808 18.482 4.97762L17.4249 4.55917L18.482 4.14073C18.7358 4.04027 18.936 3.83891 19.0357 3.58533L19.4504 2.52989ZM16.4981 7.94681C16.171 7.11437 14.9951 7.11437 14.668 7.94681L14.5134 8.34008L14.1222 8.49497C13.2928 8.82328 13.2928 9.9992 14.1222 10.3275L14.5134 10.4824L14.668 10.8757C14.9951 11.7081 16.171 11.7081 16.4981 10.8757L16.6526 10.4824L17.0439 10.3275C17.8733 9.9992 17.8733 8.82328 17.0439 8.49497L16.6526 8.34008L16.4981 7.94681ZM15.583 8.35237L15.7243 8.71188C15.824 8.96545 16.0242 9.16681 16.278 9.26727L16.6417 9.41124L16.278 9.55521C16.0242 9.65567 15.824 9.85703 15.7243 10.1106L15.583 10.4701L15.4418 10.1106C15.3421 9.85703 15.1419 9.65567 14.8881 9.55521L14.5244 9.41124L14.8881 9.26727C15.1419 9.16681 15.3421 8.96545 15.4418 8.71188L15.583 8.35237Z"
                                            fill="#fbc50b" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M11.0174 2.80157C6.37072 3.29221 2.75 7.22328 2.75 12C2.75 17.1086 6.89137 21.25 12 21.25C16.7767 21.25 20.7078 17.6293 21.1984 12.9826C19.8717 14.6669 17.8126 15.75 15.5 15.75C11.4959 15.75 8.25 12.5041 8.25 8.5C8.25 6.18738 9.33315 4.1283 11.0174 2.80157ZM1.25 12C1.25 6.06294 6.06294 1.25 12 1.25C12.7166 1.25 13.0754 1.82126 13.1368 2.27627C13.196 2.71398 13.0342 3.27065 12.531 3.57467C10.8627 4.5828 9.75 6.41182 9.75 8.5C9.75 11.6756 12.3244 14.25 15.5 14.25C17.5882 14.25 19.4172 13.1373 20.4253 11.469C20.7293 10.9658 21.286 10.804 21.7237 10.8632C22.1787 10.9246 22.75 11.2834 22.75 12C22.75 17.9371 17.9371 22.75 12 22.75C6.06294 22.75 1.25 17.9371 1.25 12Z"
                                            fill="#fbc50b" />
                                    </svg>
                                </i>
                                <h4>Sunset At<b>: 7:35 PM</b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="">
                            <ul class="social-media">
                                <li><a href="#"><i class="fab fa-facebook-f icon"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter icon"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="d-flex align-items-center login">
                            <div class="location">
                                <i>
                                    <svg width="24px" height="24px" viewBox="-4 0 32 32" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g transform="translate(-104.000000, -411.000000)" fill="#fbc50b">
                                                <path
                                                    d="M116,426 C114.343,426 113,424.657 113,423 C113,421.343 114.343,420 116,420 C117.657,420 119,421.343 119,423 C119,424.657 117.657,426 116,426 L116,426 Z M116,418 C113.239,418 111,420.238 111,423 C111,425.762 113.239,428 116,428 C118.761,428 121,425.762 121,423 C121,420.238 118.761,418 116,418 L116,418 Z M116,440 C114.337,440.009 106,427.181 106,423 C106,417.478 110.477,413 116,413 C121.523,413 126,417.478 126,423 C126,427.125 117.637,440.009 116,440 L116,440 Z M116,411 C109.373,411 104,416.373 104,423 C104,428.018 114.005,443.011 116,443 C117.964,443.011 128,427.95 128,423 C128,416.373 122.627,411 116,411 L116,411 Z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </i><span>New Street Town 2445x United State</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-bar">
                <div class="two-bar">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="logo">
                            <a href="index.html">
                                <img alt="logo" src="assets/img/logo.png">
                            </a>
                        </div>
                        <div class="bar-menu">
                            <i class="fa-solid fa-bars"></i>
                        </div>
                    </div>
                    <nav class="navbar">
                        <ul class="navbar-links">
                            <li class="navbar-dropdown">
                                <a href="#">Home</a>
                                <div class="dropdown">
                                    <a href="index.html">home 1</a>
                                    <a href="index-2.html">home 2</a>
                                </div>
                            </li>
                            <li class="navbar-dropdown">
                                <a href="about.html">About</a>
                            </li>
                            <li class="navbar-dropdown">
                                <a href="#">Courses</a>
                                <div class="dropdown">
                                    <a href="our-courses.html">our courses</a>
                                    <a href="courses-details.html">courses details</a>
                                </div>
                            </li>
                            <li class="navbar-dropdown">
                                <a href="#">campaigns</a>
                                <div class="dropdown">
                                    <a href="our-campaigns.html">our campaigns</a>
                                    <a href="campaign-details.html">campaign details</a>
                                </div>
                            </li>
                            <li class="navbar-dropdown">
                                <a href="#">pages</a>
                                <div class="dropdown">
                                    <a href="our-scholar.html">our scholar</a>
                                    <a href="scholar-details.html">scholar details</a>
                                    <a href="our-events.html">our events</a>
                                    <a href="pricing-packages.html">pricing packages</a>
                                    <a href="404.html">404</a>
                                </div>
                            </li>
                            <li class="navbar-dropdown">
                                <a href="#">News</a>
                                <div class="dropdown">
                                    <a href="our-blog.html">our blog</a>
                                    <a href="blog-details.html">blog details</a>
                                </div>
                            </li>
                            <li class="navbar-dropdown">
                                <a href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="header-search">
                        <a href="callto:+(00)123-345-11"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M442.77,80.93l.27-.27-9.39-9a256,256,0,0,0-351.8-3.23h0l-.29.28-9.43,8.77.23.23A257,257,0,0,0,0,256V480a32,32,0,0,0,32,32H94.4a59.2,59.2,0,0,0,59.2-59.2v-112a59.2,59.2,0,0,0-59.2-59.2H25.6V256A231.25,231.25,0,0,1,90.48,95.78l6.95,6.95c15.42,15.41,39.38,17.79,56.95,5.66a179.16,179.16,0,0,1,206,2,44.07,44.07,0,0,0,25.82,8.34,45.65,45.65,0,0,0,32.29-13.53L424.66,99A228.56,228.56,0,0,1,486.4,256v25.6H417.6a59.2,59.2,0,0,0-59.2,59.2v112A59.2,59.2,0,0,0,417.6,512H480a32,32,0,0,0,32-32V256A254,254,0,0,0,442.77,80.93ZM76.8,307.2H94.4A33.64,33.64,0,0,1,128,340.8v112a33.64,33.64,0,0,1-33.6,33.6H76.8Zm-25.6,0V486.4H32a6.41,6.41,0,0,1-6.4-6.4V307.2ZM400.41,87.09c-6.81,6.82-17.59,7.91-25.06,2.51a204.77,204.77,0,0,0-235.51-2.3c-7.42,5.13-17.65,4-24.31-2.68l-6.26-6.26a230.51,230.51,0,0,1,297,2.89ZM435.2,486.4H417.6A33.64,33.64,0,0,1,384,452.8v-112a33.64,33.64,0,0,1,33.6-33.6h17.6Zm51.2-6.4a6.41,6.41,0,0,1-6.4,6.4H460.8V307.2h25.6V480Z" />
                            </svg>+(00) 123-345-11</a>
                        <div class="header-search-button search-box-outer">
                            <a href="javascript:void(0)" class="search-btn">
                                <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <g id="_12" data-name="12">
                                        <path
                                            d="m21.71 20.29-2.83-2.82a9.52 9.52 0 1 0 -1.41 1.41l2.82 2.83a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42zm-17.71-8.79a7.5 7.5 0 1 1 7.5 7.5 7.5 7.5 0 0 1 -7.5-7.5z">
                                        </path>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-nav hmburger-menu" id="mobile-nav" style="display:block;">
            <div class="res-log">
                <a href="index.html">
                    <img src="assets/img/logo.png" alt="Responsive Logo" class="white-logo">
                </a>
            </div>
            <ul>
                <li class="menu-item-has-children"><a href="JavaScript:void(0)">Home</a>
                    <ul class="sub-menu">
                        <li><a href="index.html">home 1</a></li>
                        <li><a href="index-2.html">home 2</a></li>
                    </ul>
                </li>
                <li><a href="about.html">about</a></li>
                <li class="menu-item-has-children"><a href="JavaScript:void(0)">Courses</a>
                    <ul class="sub-menu">
                        <li><a href="our-courses.html">our courses</a></li>
                        <li><a href="courses-details.html">courses details</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="JavaScript:void(0)">campaigns</a>
                    <ul class="sub-menu">
                        <li><a href="our-campaigns.html">our campaigns</a></li>
                        <li><a href="campaign-details.html">campaign details</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="JavaScript:void(0)">pages</a>
                    <ul class="sub-menu">
                        <li><a href="our-scholar.html">our scholar</a></li>
                        <li><a href="scholar-details.html">scholar details</a></li>
                        <li><a href="our-events.html">our events</a></li>
                        <li><a href="pricing-packages.html">pricing packages</a></li>
                        <li><a href="404.html">404</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="JavaScript:void(0)">News</a>
                    <ul class="sub-menu">
                        <li><a href="our-blog.html">our blog</a></li>
                        <li><a href="blog-details.html">blog details</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <a href="JavaScript:void(0)" id="res-cross"></a>
        </div>
    </header>
    <!-- header end -->