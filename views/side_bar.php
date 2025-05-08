<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$resources_url_opus_img = base_url()."resources/opus/img/";
$resources_url_opus_css = base_url()."resources/opus/css/";
$this->input->get('menu');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Seo Meta -->
    <meta name="description" content="Listen App - Online Music Streaming App Template">
    <meta name="keywords" content="music template, music app, music web app, responsive music app, music, themeforest, html music app template, css3, html5">

    <title>Opuscore Releases (Beta I Service in progress): Online Music Streaming & Pod/Video cast</title>

    <!-- Favicon -->
    <link href="<?php echo base_url();?>favicon.ico" rel="icon"/>

    <!-- IOS Touch Icons -->
    <link rel="apple-touch-icon" href="<?php echo $resources_url_opus_img;?>logos/touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $resources_url_opus_img;?>logos/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $resources_url_opus_img;?>logos/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="<?php echo $resources_url_opus_img;?>logos/touch-icon-ipad-retina.png">

    <!-- Styles -->
    <link href="<?php echo $resources_url_opus_css;?>plugins.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $resources_url_opus_css;?>styles.bundle.css" rel="stylesheet" type="text/css"/>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <!-- Line loader [[ Find at scss/framework/loader.scss ]] -->
    <div id="line_loader"></div>
    
    <!-- Start:: loader [[ Find at scss/framework/loader.scss ]]  -->
    <div id="loader">
        <div class="loader">
            <div class="loader__eq mx-auto">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <span class="loader__text mt-2">Loading</span>
        </div>
    </div>
   

    <!-- Start:: wrapper [[ Find at scss/framework/wrapper.scss ]] -->
    <div id="wrapper">

        <!-- Start:: sidebar [[ Find at scss/framework/sidebar.scss ]] -->
        <aside id="sidebar">
            <div class="sidebar-head d-flex align-items-center justify-content-between">
                <a href="<?php echo base_url(); ?>" class="brand external">
                    <img src="<?php echo $resources_url_opus_img;?>logos/logo.png" alt="Listen app">
                </a>
                
                <a role="button" class="sidebar-toggler" aria-label="Sidebar toggler">
                    <div class="d-none d-lg-block">
                        <i class="ri-menu-3-line sidebar-menu-1"></i>
                        <i class="ri-menu-line sidebar-menu-2"></i>
                    </div>
                    <i class="ri-menu-fold-line d-lg-none"></i>
                </a>
            </div>

            <div class="sidebar-body" data-scroll="true">
                <nav class="navbar d-block p-0">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/home?menu=home" class="nav-link d-flex align-items-center <?php if ($this->input->get('menu') == "home" or $this->input->get('menu') == "") { echo " active"; } ?>">
                                <i class="ri-home-4-line fs-5"></i>
                                <span class="ps-3">Home</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/genres?menu=genre" class="nav-link d-flex align-items-center <?php if ($this->input->get('menu') == "genre") { echo " active"; } ?>">
                                <i class="ri-disc-line fs-5"></i>
                                <span class="ps-3">Genres</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/sound_track?menu=soundtrack" class="nav-link d-flex align-items-center <?php if ($this->input->get('menu') == "soundtrack") { echo " active"; } ?>">
                                <i class="ri-music-2-line fs-5"></i>
                                <span class="ps-3">Sound Tracks</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/recordings?menu=recordings" class="nav-link d-flex align-items-center <?php if ($this->input->get('menu') == "recordings") { echo " active"; } ?>">
                                <i class="ri-album-line fs-5"></i>
                                <span class="ps-3">Recordings</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/byComposers?menu=bycomposers" class="nav-link d-flex align-items-center <?php if ($this->input->get('menu') == "bycomposers") { echo " active"; } ?>">
                                <i class="ri-mic-line fs-5"></i>
                                <span class="ps-3">By Composers</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/byPerformers?menu=byperformers" class="nav-link d-flex align-items-center <?php if ($this->input->get('menu') == "byperformers") { echo " active"; } ?>">
                                <i class="ri-mic-line fs-5"></i>
                                <span class="ps-3">By Performers</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/stations?menu=stations" class="nav-link d-flex align-items-center <?php if ($this->input->get('menu') == "stations") { echo " active"; } ?>">
                                <i class="ri-radio-2-line fs-5"></i>
                                <span class="ps-3">Stations</span>
                            </a>
                        </li>

                        <!--<li class="nav-item nav-item--head">
                            <span class="nav-item--head__text">Music</span>
                            <span class="nav-item--head__dots">...</span>
                        </li>
                        <li class="nav-item">
                            <a href="analytics.html" class="nav-link d-flex align-items-center">
                                <i class="ri-pie-chart-line fs-5"></i>
                                <span class="ps-3">Analytics</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="favorites.html" class="nav-link d-flex align-items-center">
                                <i class="ri-heart-line fs-5"></i>
                                <span class="ps-3">Favorites</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="history.html" class="nav-link d-flex align-items-center">
                                <i class="ri-history-line fs-5"></i>
                                <span class="ps-3">History</span>
                            </a>
                        </li>
                        <li class="nav-item nav-item--head">
                            <span class="nav-item--head__text">Events</span>
                            <span class="nav-item--head__dots">...</span>
                        </li>
                        <li class="nav-item">
                            <a href="events.html" class="nav-link d-flex align-items-center">
                                <i class="ri-calendar-event-line fs-5"></i>
                                <span class="ps-3">Events</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="event-details.html" class="nav-link d-flex align-items-center">
                                <i class="ri-newspaper-line fs-5"></i>
                                <span class="ps-3">Event Details</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="add-event.html" class="nav-link d-flex align-items-center">
                                <i class="ri-add-circle-line fs-5"></i>
                                <span class="ps-3">Add Event</span>
                            </a>
                        </li>
                        <li class="nav-item nav-item--head">
                            <span class="nav-item--head__text">Extra</span>
                            <span class="nav-item--head__dots">...</span>
                        </li>
                        <li class="nav-item">
                            <a href="404.html" class="nav-link d-flex align-items-center external">
                                <i class="ri-error-warning-line fs-5"></i>
                                <span class="ps-3">404 Page</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="blank.html" class="nav-link d-flex align-items-center">
                                <i class="ri-file-line fs-5"></i>
                                <span class="ps-3">Blank Template</span>
                            </a>
                        </li>-->
                    </ul>
                </nav>
            </div>

            <!--<div class="sidebar-foot">
                <a href="add-music.html" class="btn btn-primary d-flex">
                    <div class="btn__wrap">
                        <i class="ri-music-fill"></i>
                        <span>Add Music</span>
                    </div>
                </a>
            </div>-->
        </aside>
        <!-- End:: sidebar -->